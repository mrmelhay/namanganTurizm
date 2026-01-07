@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $tour->getTranslated('title') }}</h1>

                <div id="tourCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        @if($tour->images && count($tour->images) > 0)
                            @foreach($tour->images as $key => $image)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $image) }}" class="d-block w-100"
                                        style="height: 400px; object-fit: cover;" alt="...">
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img src="https://placehold.co/800x400" class="d-block w-100" alt="Placeholder">
                            </div>
                        @endif
                    </div>
                    @if($tour->images && count($tour->images) > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#tourCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#tourCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>

                <div class="card mb-4 p-4">
                    <div class="mb-4">
                        <h3>{{ __('Description') }}</h3>
                        <div>{!! $tour->getTranslated('description') !!}</div>
                    </div>

                    @if($tour->route_list)
                        <div class="mb-4">
                            <h3>{{ __('Itinerary / Route') }}</h3>
                            <p>{{ is_array($tour->route_list) ? ($tour->route_list[App::getLocale()] ?? $tour->route_list['en'] ?? '') : $tour->route_list }}
                            </p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm position-sticky" style="top: 20px;">
                    <div class="card-body">
                        <h3 class="text-primary mb-3">{{ __('Tour Details') }}</h3>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>{{ __('Duration') }}:</strong> <span>{{ $tour->duration }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>{{ __('Transport') }}:</strong> <span>{{ $tour->transport_type }}</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-success w-100 btn-lg">{{ __('Book Now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection