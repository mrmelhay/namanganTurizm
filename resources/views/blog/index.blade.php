@extends('layouts.app')

@section('title', __('meta_title_blog'))
@section('meta_description', __('meta_description_blog'))

@section('content')
    <div class="container my-5 pt-4">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">{{ __('Latest News') }}</h1>
            <p class="text-muted lead">{{ __('Updates and stories from Namangan Turizm.') }}</p>
        </div>

        <div class="row g-4">
            @foreach($posts as $post)
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
                            <p class="card-text text-muted mb-4">{{ Str::limit(strip_tags($post->getTranslated('body')), 100) }}
                            </p>
                            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-outline-primary w-100">{{ __('Read More') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection