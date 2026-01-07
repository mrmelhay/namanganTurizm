@extends('layouts.app')

@section('title', $post->getTranslated('title') . ' - Namangan Turizm')
@section('meta_description', Str::limit(strip_tags($post->getTranslated('body')), 150))
@section('meta_image', $post->image_path ? asset('storage/' . $post->image_path) : '')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                @if($post->image_path)
                    <img src="{{ asset('storage/' . $post->image_path) }}" class="img-fluid rounded mb-4 w-100"
                        alt="{{ $post->getTranslated('title') }}">
                @endif

                <h1 class="mb-4">{{ $post->getTranslated('title') }}</h1>
                <div class="text-muted mb-4">
                    <i class="bi bi-clock"></i> {{ $post->created_at->format('d M, Y') }}
                </div>

                <div class="blog-content">
                    {!! $post->getTranslated('body') !!}
                </div>

                <hr class="my-5">
                <div class="text-center">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-primary">{{ __('Back to Blog') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection