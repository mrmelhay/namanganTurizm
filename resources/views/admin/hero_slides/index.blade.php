@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Hero Slides</h1>
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Hero Slides</li>
            </ol>
            <a href="{{ route('admin.hero-slides.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> Add New Slide
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-images me-1"></i>
                All Slides
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title (EN)</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slides as $slide)
                            <tr>
                                <td>{{ $slide->id }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $slide->image_path) }}" alt="Slide"
                                        style="height: 50px; object-fit: cover;">
                                </td>
                                <td>{{ $slide->getTranslation('title', 'en') }}</td>
                                <td>{{ $slide->order }}</td>
                                <td>
                                    <span class="badge bg-{{ $slide->is_active ? 'success' : 'secondary' }}">
                                        {{ $slide->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.hero-slides.edit', $slide->id) }}"
                                        class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                    <form action="{{ route('admin.hero-slides.destroy', $slide->id) }}" method="POST"
                                        class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="fas fa-trash"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection