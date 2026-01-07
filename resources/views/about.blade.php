@extends('layouts.app')

@section('title', __('meta_title_about'))
@section('meta_description', __('meta_description_about'))

@section('content')
    <div class="container my-5">
        @if($about)
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" alt="About Namangan Turizm"
                            class="img-fluid rounded shadow">
                    @endif
                </div>
                <div class="col-md-6">
                    <h1 class="mb-4 display-4 fw-bold text-primary">{{ $about->getTranslated('title') }}</h1>
                    <div class="lead text-muted about-content">
                        {!! $about->getTranslated('content') !!}
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center">
                <h4>Information is being updated.</h4>
                <p>Please check back later for more details about us.</p>
            </div>
        @endif
    </div>

    <style>
        .about-content p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }
    </style>
@endsection