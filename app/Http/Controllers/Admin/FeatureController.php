<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::orderBy('order')->get();
        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string',
            'title_en' => 'required|string',
            'order' => 'integer',
        ]);

        $data = $request->all();

        $data['title'] = [
            'en' => $request->title_en,
            'uz' => $request->title_uz,
            'ru' => $request->title_ru
        ];
        $data['description'] = [
            'en' => $request->description_en,
            'uz' => $request->description_uz,
            'ru' => $request->description_ru
        ];

        Feature::create($data);

        return redirect()->route('admin.features.index')->with('success', 'Feature created successfully.');
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'icon' => 'required|string',
            'title_en' => 'required|string',
        ]);

        $data = $request->all();

        $data['title'] = [
            'en' => $request->title_en,
            'uz' => $request->title_uz,
            'ru' => $request->title_ru
        ];
        $data['description'] = [
            'en' => $request->description_en,
            'uz' => $request->description_uz,
            'ru' => $request->description_ru
        ];

        $feature->update($data);

        return redirect()->route('admin.features.index')->with('success', 'Feature updated successfully.');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')->with('success', 'Feature deleted successfully.');
    }
}