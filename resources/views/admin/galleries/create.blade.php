@extends('layouts.admin')

@section('content')
    <h2>Add to Gallery</h2>
    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 border p-3">
            <label class="form-label fw-bold">Title</label>
            <div class="input-group mb-2">
                <span class="input-group-text">UZ</span>
                <input type="text" name="title[uz]" class="form-control">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text">RU</span>
                <input type="text" name="title[ru]" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection