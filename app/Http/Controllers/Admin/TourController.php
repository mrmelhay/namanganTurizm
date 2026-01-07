<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::latest()->paginate(10);
        return view('admin.tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|array',
            'description' => 'required|array',
            'price' => 'required|string',
            'duration' => 'required|string',
            'transport_type' => 'required|string',
            'route_list' => 'nullable|array', // or handle as string and convert? User input might be dynamic.
            // Let's assume frontend sends array or we parse it. For simplicity, let's say input is array.
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $file) {
                $path = $file->store('tours', 'public');
                $images[] = $path;
            }
            $data['images'] = $images; // Model casts this to array, but storing it needs to be array.
        }

        Tour::create($data);

        return redirect()->route('admin.tours.index')->with('success', 'Tour created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $validated = $request->validate([
            'title' => 'required|array',
            'description' => 'required|array',
            'price' => 'required|string',
            'duration' => 'required|string',
            'transport_type' => 'required|string',
            'route_list' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('images')) {
            $images = $tour->images ?? [];
            foreach ($request->file('images') as $file) {
                $path = $file->store('tours', 'public');
                $images[] = $path;
            }
            $data['images'] = $images;
        }

        $tour->update($data);

        return redirect()->route('admin.tours.index')->with('success', 'Tour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        if ($tour->images) {
            foreach ($tour->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        $tour->delete();

        return redirect()->route('admin.tours.index')->with('success', 'Tour deleted successfully.');
    }
}
