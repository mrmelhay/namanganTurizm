@extends('layouts.app')

@section('content')
    <div class="container my-5 pt-4">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">{{ __('Hotels') }}</h1>
            <p class="text-muted lead">{{ __('Stay in comfort and luxury.') }}</p>
        </div>

        <div class="row g-4">
            @foreach($hotels as $hotel)
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom h-100">
                        <div class="card-img-wrapper">
                            <a href="{{ route('hotels.show', $hotel->id) }}">
                                @if($hotel->images && count($hotel->images) > 0)
                                    <img src="{{ asset('storage/' . $hotel->images[0]) }}" class="card-img-top"
                                        alt="{{ $hotel->getTranslated('name') }}">
                                @else
                                    <img src="https://placehold.co/400x300" class="card-img-top" alt="Placeholder">
                                @endif
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('hotels.show', $hotel->id) }}">{{ $hotel->getTranslated('name') }}</a>
                            </h5>
                            <div class="text-warning mb-2">
                                @for($i = 0; $i < $hotel->stars; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                            </div>
                            <p class="card-text text-muted mb-4">
                                {{ Str::limit(strip_tags($hotel->getTranslated('description')), 100) }}</p>
                            <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-outline-primary w-100">{{ __('View Details') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $hotels->links() }}
        </div>
    </div>
@endsection