@extends('layouts.app')

@section('title', $hotel->getTranslated('name') . ' - Namangan Turizm')
@section('meta_description', Str::limit(strip_tags($hotel->getTranslated('description')), 150))
@section('meta_image', isset($hotel->images[0]) ? asset('storage/' . $hotel->images[0]) : '')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $hotel->getTranslated('name') }}</h1>

                <div class="mb-3">
                    @for($i = 0; $i < $hotel->stars; $i++)
                        <i class="bi bi-star-fill text-warning"></i>
                    @endfor
                    <span class="text-muted">({{ $hotel->stars }} {{ __('Stars') }})</span>
                </div>

                @if($hotel->images && count($hotel->images) > 0)
                    <div id="hotelCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($hotel->images as $index => $image)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $image) }}" class="d-block w-100 rounded" alt="Hotel Image">
                                </div>
                            @endforeach
                        </div>
                        @if(count($hotel->images) > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">{{ __('Previous') }}</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">{{ __('Next') }}</span>
                            </button>
                        @endif
                    </div>
                @endif

                <div class="card p-4 shadow-sm">
                    <h4>{{ __('About Hotel') }}</h4>
                    <div class="hotel-description">
                        {!! $hotel->getTranslated('description') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm p-3 mb-4">
                    <h5 class="card-title">{{ __('Book this Hotel') }}</h5>
                    <form action="{{ route('contact') }}">
                        <button class="btn btn-primary w-100">{{ __('Contact Us') }}</button>
                    </form>
                </div>

                <div class="card shadow-sm p-3">
                    <h5 class="card-title">{{ __('Location') }}</h5>
                    <!-- Placeholder for map or address -->
                    <p>{{ $hotel->getTranslated('address') }}</p>
                    <div class="map-placeholder bg-light p-5 text-center text-muted">{{ __('Map goes here') }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection