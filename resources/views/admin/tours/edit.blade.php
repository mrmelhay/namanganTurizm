@extends('layouts.admin')

@section('content')
    <h2>Edit Tour</h2>
    <form action="{{ route('admin.tours.update', $tour) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Title</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">UZ</span>
                        <input type="text" name="title[uz]" class="form-control"
                            value="{{ $tour->getTranslated('title', 'uz') }}" required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">RU</span>
                        <input type="text" name="title[ru]" class="form-control"
                            value="{{ $tour->getTranslated('title', 'ru') }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">EN</span>
                        <input type="text" name="title[en]" class="form-control"
                            value="{{ $tour->getTranslated('title', 'en') }}">
                    </div>
                </div>

                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Description</label>
                    <div class="mb-2">
                        <span class="badge bg-secondary">UZ</span>
                        <textarea name="description[uz]" class="form-control" rows="3"
                            required>{{ $tour->getTranslated('description', 'uz') }}</textarea>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">RU</span>
                        <textarea name="description[ru]" class="form-control"
                            rows="3">{{ $tour->getTranslated('description', 'ru') }}</textarea>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">EN</span>
                        <textarea name="description[en]" class="form-control"
                            rows="3">{{ $tour->getTranslated('description', 'en') }}</textarea>
                    </div>
                </div>

                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Route</label>
                    @php $route = $tour->route_list ?? []; @endphp
                    <div class="input-group mb-2">
                        <span class="input-group-text">UZ</span>
                        <input type="text" name="route_list[uz]" class="form-control"
                            value="{{ is_array($route) ? ($route['uz'] ?? '') : '' }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">RU</span>
                        <input type="text" name="route_list[ru]" class="form-control"
                            value="{{ is_array($route) ? ($route['ru'] ?? '') : '' }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">EN</span>
                        <input type="text" name="route_list[en]" class="form-control"
                            value="{{ is_array($route) ? ($route['en'] ?? '') : '' }}">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" value="{{ $tour->price }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Duration</label>
                    <input type="text" name="duration" class="form-control" value="{{ $tour->duration }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Transport Type</label>
                    <input type="text" name="transport_type" class="form-control" value="{{ $tour->transport_type }}"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Images</label>
                    <input type="file" name="images[]"
                        class="form-control @error('images') is-invalid @enderror @error('images.*') is-invalid @enderror"
                        multiple>
                    <div class="form-text text-muted">
                        Max upload size: {{ ini_get('upload_max_filesize') }} (Server Limit).
                        Supported formats: jpeg, png, jpg, gif.
                    </div>
                    @error('images')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    @error('images.*')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    @if($tour->images)
                        <div class="mt-2">
                            @foreach($tour->images as $img)
                                <img src="{{ asset('storage/' . $img) }}" width="50" class="me-1">
                            @endforeach
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </div>
    </form>
@endsection