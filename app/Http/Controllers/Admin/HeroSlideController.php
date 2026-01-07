<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSlideController extends Controller
{
    public function index()
    {
        $slides = HeroSlide::orderBy('order')->get();
        return view('admin.hero_slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.hero_slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string',
            'order' => 'integer',
        ]);

        $data = $request->except(['image_path']);

        $data['title'] = [
            'en' => $request->title_en,
            'uz' => $request->title_uz,
            'ru' => $request->title_ru
        ];
        $data['subtitle'] = [
            'en' => $request->subtitle_en,
            'uz' => $request->subtitle_uz,
            'ru' => $request->subtitle_ru
        ];
        $data['button_text'] = [
            'en' => $request->button_text_en,
            'uz' => $request->button_text_uz,
            'ru' => $request->button_text_ru
        ];

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('hero_slides', 'public');
            $data['image_path'] = $path;
        }

        HeroSlide::create($data);

        return redirect()->route('admin.hero-slides.index')->with('success', 'Slide created successfully.');
    }

    public function edit(HeroSlide $heroSlide)
    {
        return view('admin.hero_slides.edit', compact('heroSlide'));
    }

    public function update(Request $request, HeroSlide $heroSlide)
    {
        $request->validate([
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string',
        ]);

        $data = $request->except(['image_path']);

        $data['title'] = [
            'en' => $request->title_en,
            'uz' => $request->title_uz,
            'ru' => $request->title_ru
        ];
        $data['subtitle'] = [
            'en' => $request->subtitle_en,
            'uz' => $request->subtitle_uz,
            'ru' => $request->subtitle_ru
        ];
        $data['button_text'] = [
            'en' => $request->button_text_en,
            'uz' => $request->button_text_uz,
            'ru' => $request->button_text_ru
        ];

        if ($request->hasFile('image_path')) {
            if ($heroSlide->image_path) {
                Storage::disk('public')->delete($heroSlide->image_path);
            }
            $path = $request->file('image_path')->store('hero_slides', 'public');
            $data['image_path'] = $path;
        }

        $heroSlide->update($data);

        return redirect()->route('admin.hero-slides.index')->with('success', 'Slide updated successfully.');
    }

    public function destroy(HeroSlide $heroSlide)
    {
        if ($heroSlide->image_path) {
            Storage::disk('public')->delete($heroSlide->image_path);
        }
        $heroSlide->delete();
        return redirect()->route('admin.hero-slides.index')->with('success', 'Slide deleted successfully.');
    }
}