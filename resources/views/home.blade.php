@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>{!! __('Discover Hidden Gems') !!}</h1>
                <p class="lead mb-4 text-light opacity-75">{!! __('Experience the rich culture, stunning landscapes, and warm
                    hospitality of Uzbekistan flower city.') !!}</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('tours.index') }}"
                        class="btn btn-primary-custom btn-lg px-5">{{ __('Explore Tours') }}</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-5">{{ __('Contact Us') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($features as $feature)
                    <div class="col-md-4">
                        <div class="card card-custom p-4 text-center h-100">
                            <div class="mb-3 text-gold display-4"><i class="{{ $feature->icon }}"></i></div>
                            <h3 class="h4 mb-3">{{ $feature->getTranslated('title') }}</h3>
                            <p class="text-muted">{{ $feature->getTranslated('description') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Popular Tours Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <!-- <span class="text-gold fw-bold text-uppercase tracking-wider font-cinzel">{{ __('Tours') }}</span> -->
                <h2 class="display-5 fw-bold mt-2">{{ __('Our Tours') }}</h2>
            </div>

            <div class="row g-4">
                @foreach($features_tours as $tour)
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-img-wrapper">
                                <a href="{{ route('tours.show', $tour->id) }}">
                                    @if($tour->images && count($tour->images) > 0)
                                        <img src="{{ asset('storage/' . $tour->images[0]) }}" class="card-img-top"
                                            alt="{{ $tour->getTranslated('title') }}">
                                    @else
                                        <img src="https://placehold.co/400x300" class="card-img-top" alt="Placeholder">
                                    @endif
                                    <div class="badge bg-secondary position-absolute top-0 end-0 m-3">{{ $tour->duration }}
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('tours.show', $tour->id) }}">{{ $tour->getTranslated('title') }}</a>
                                </h5>
                                <div class="card-meta">
                                    <span><i class="bi bi-cash me-1"></i> {{ $tour->price }}</span>
                                    <span><i class="bi bi-bus-front me-1"></i> {{ $tour->transport_type }}</span>
                                </div>
                                <p class="card-text text-muted mb-4">
                                    {{ Str::limit(strip_tags($tour->getTranslated('description')), 80) }}
                                </p>
                                <a href="{{ route('tours.show', $tour->id) }}"
                                    class="btn btn-outline-primary w-100">{{ __('View Details') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- <div class="text-center mt-5">
                    <a href="{{ route('tours.index') }}" class="btn btn-primary-custom">{{ __('Our Tours') }}</a>
                </div> -->
        </div>
    </section>

    <!-- Latest Blog Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <!-- <span class="text-gold fw-bold text-uppercase tracking-wider font-cinzel">{{ __('Blog') }}</span> -->
                <h2 class="display-5 fw-bold mt-2">{{ __('Latest News') }}</h2>
            </div>
            <div class="row g-4">
                @foreach($latest_posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-img-wrapper">
                                <a href="{{ route('blog.show', $post->id) }}">
                                    @if($post->image_path)
                                        <img src="{{ asset('storage/' . $post->image_path) }}" class="card-img-top"
                                            alt="{{ $post->getTranslated('title') }}">
                                    @else
                                        <img src="https://placehold.co/400x300" class="card-img-top" alt="Placeholder">
                                    @endif
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="small text-muted mb-2">{{ $post->created_at->format('M d, Y') }}</div>
                                <h5 class="card-title">
                                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->getTranslated('title') }}</a>
                                </h5>
                                <p class="card-text text-muted">{{ Str::limit(strip_tags($post->getTranslated('body')), 80) }}
                                </p>
                                <a href="{{ route('blog.show', $post->id) }}"
                                    class="btn btn-outline-primary mt-3 w-100">{{ __('Read More') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection