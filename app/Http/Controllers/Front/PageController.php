<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\Post;
use App\Models\HeroSlide;
use App\Models\Feature;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $features_tours = Tour::latest()->take(6)->get();
        // $features_hotels = Hotel::latest()->take(3)->get();
        $latest_posts = Post::latest()->take(3)->get();

        $heroSlides = HeroSlide::where('is_active', true)->orderBy('order')->get();
        $features = Feature::orderBy('order')->get();

        return view('home', compact('features_tours', 'latest_posts', 'heroSlides', 'features'));
    }

    public function about()
    {
        $about = \App\Models\AboutContent::first();
        return view('about', compact('about'));
    }

    public function hotels()
    {
        $hotels = Hotel::latest()->paginate(9);
        return view('hotels.index', compact('hotels'));
    }

    public function hotelShow($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotels.show', compact('hotel'));
    }

    public function transport()
    {
        return view('transport.index');
    }

    public function gallery()
    {
        return view('gallery.index');
    }

    public function blog()
    {
        $posts = Post::latest()->paginate(9);
        return view('blog.index', compact('posts'));
    }

    public function blogShow($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.show', compact('post'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function changeLocale($lang)
    {
        if (in_array($lang, ['en', 'uz', 'ru'])) {
            session(['locale' => $lang]);
        }
        return redirect()->back();
    }
}
