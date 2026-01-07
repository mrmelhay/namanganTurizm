@extends('layouts.admin')

@section('content')
    <h2>Create Post</h2>
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Title</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">UZ</span>
                        <input type="text" name="title[uz]" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Body</label>
                    <div class="mb-2">
                        <span class="badge bg-secondary">UZ</span>
                        <textarea name="body[uz]" class="form-control" rows="5" required></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-success w-100">Save</button>
            </div>
        </div>
    </form>
@endsection