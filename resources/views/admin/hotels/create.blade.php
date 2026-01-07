@extends('layouts.admin')

@section('content')
    <h2>Create Hotel</h2>
    <form action="{{ route('admin.hotels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Name</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">UZ</span>
                        <input type="text" name="name[uz]" class="form-control" required>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">RU</span>
                        <input type="text" name="name[ru]" class="form-control">
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
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Stars</label>
                    <input type="number" name="stars" class="form-control" min="1" max="5" value="3" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Images</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                </div>
                <button type="submit" class="btn btn-success w-100">Save</button>
            </div>
        </div>
    </form>
@endsection