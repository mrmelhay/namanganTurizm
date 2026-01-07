@extends('layouts.app')

@section('title', __('meta_title_tours'))
@section('meta_description', __('meta_description_tours'))

@section('content')
    <div class="container my-5 pt-4">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">{{ __('Tours') }}</h1>
            <p class="text-muted lead">{{ __('Explore our curated travel packages') }}</p>
        </div>

        <div class="row g-4">
            @foreach($tours as $tour)
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
                                <div class="badge bg-secondary position-absolute top-0 end-0 m-3">{{ $tour->duration }}</div>
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
                                {{ Str::limit(strip_tags($tour->getTranslated('description')), 100) }}</p>
                            <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-outline-primary w-100">{{ __('View Details') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $tours->links() }}
        </div>
    </div>
@endsection