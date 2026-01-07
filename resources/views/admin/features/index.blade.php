@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Features</h1>
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Features</li>
            </ol>
            <a href="{{ route('admin.features.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> Add New Feature
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
                <i class="fas fa-list me-1"></i>
                All Features
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Icon</th>
                            <th>Title (EN)</th>
                            <th>Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($features as $feature)
                            <tr>
                                <td>{{ $feature->id }}</td>
                                <td><i class="{{ $feature->icon }} text-primary fs-4"></i></td>
                                <td>{{ $feature->getTranslation('title', 'en') }}</td>
                                <td>{{ $feature->order }}</td>
                                <td>
                                    <a href="{{ route('admin.features.edit', $feature->id) }}" class="btn btn-sm btn-warning"><i
                                            class="fas fa-edit"></i>Edit</a>
                                    <form action="{{ route('admin.features.destroy', $feature->id) }}" method="POST"
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