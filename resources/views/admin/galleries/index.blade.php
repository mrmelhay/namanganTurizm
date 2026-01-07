@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Gallery</h2>
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">Add New Image</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title (UZ)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->id }}</td>
                    <td><img src="{{ asset('storage/' . $gallery->image_path) }}" width="80" alt="img"></td>
                    <td>{{ $gallery->getTranslated('title', 'uz') }}</td>
                    <td>
                        <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $galleries->links() }}
@endsection