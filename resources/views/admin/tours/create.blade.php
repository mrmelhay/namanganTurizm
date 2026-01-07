@extends('layouts.admin')

@section('content')
    <h2>Create Tour</h2>
    <form action="{{ route('admin.tours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Title</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">UZ</span>
                        <input type="text" name="title[uz]" class="form-control" required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">RU</span>
                        <input type="text" name="title[ru]" class="form-control">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">EN</span>
                        <input type="text" name="title[en]" class="form-control">
                    </div>
                </div>

                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Description</label>
                    <div class="mb-2">
                        <span class="badge bg-secondary">UZ</span>
                        <textarea name="description[uz]" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">RU</span>
                        <textarea name="description[ru]" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">EN</span>
                        <textarea name="description[en]" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Route</label>
                    <small class="d-block text-muted">Example: Namangan - Toshkent - Namangan</small>
                    <div class="input-group mb-2">
                        <span class="input-group-text">UZ</span>
                        <input type="text" name="route_list[uz]" class="form-control">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">RU</span>
                        <input type="text" name="route_list[ru]" class="form-control">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">EN</span>
                        <input type="text" name="route_list[en]" class="form-control">
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="100$" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Duration</label>
                    <input type="text" name="duration" class="form-control" placeholder="2 kun, 1 kecha" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Transport Type</label>
                    <input type="text" name="transport_type" class="form-control" placeholder="Mikroavtobus" required>
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
                </div>
                <button type="submit" class="btn btn-success w-100">Save</button>
            </div>
        </div>
    </form>
@endsection