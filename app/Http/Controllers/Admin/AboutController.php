<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutContent::firstOrCreate([], [
            'title' => ['uz' => '', 'ru' => '', 'en' => ''],
            'content' => ['uz' => '', 'ru' => '', 'en' => '']
        ]);
        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request)
    {
        $about = AboutContent::first();

        $data = $request->validate([
            'title' => 'required|array',
            'content' => 'required|array',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('about', 'public');
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About page updated successfully.');
    }
}
