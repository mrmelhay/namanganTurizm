@extends('layouts.admin')

@section('content')
    <h2>Edit Post</h2>
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Title</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">UZ</span>
                        <input type="text" name="title[uz]" class="form-control"
                            value="{{ $post->getTranslated('title', 'uz') }}" required>
                    </div>
                </div>

                <div class="mb-3 border p-3">
                    <label class="form-label fw-bold">Body</label>
                    <div class="mb-2">
                        <span class="badge bg-secondary">UZ</span>
                        <textarea name="body[uz]" class="form-control" rows="5"
                            required>{{ $post->getTranslated('body', 'uz') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if($post->image_path)
                        <img src="{{ asset('storage/' . $post->image_path) }}" width="100" class="mt-2">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </div>
    </form>
@endsection