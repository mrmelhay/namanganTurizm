@extends('layouts.admin')

@section('content')
    <h2>Edit Gallery Item</h2>
    <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3 border p-3">
            <label class="form-label fw-bold">Title</label>
            <div class="input-group mb-2">
                <span class="input-group-text">UZ</span>
                <input type="text" name="title[uz]" class="form-control"
                    value="{{ $gallery->getTranslated('title', 'uz') }}">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text">RU</span>
                <input type="text" name="title[ru]" class="form-control"
                    value="{{ $gallery->getTranslated('title', 'ru') }}">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @if($gallery->image_path)
                <img src="{{ asset('storage/' . $gallery->image_path) }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection