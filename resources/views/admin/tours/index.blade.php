@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Tours</h2>
        <a href="{{ route('admin.tours.create') }}" class="btn btn-primary">Add New Tour</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title (UZ)</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td>{{ $tour->getTranslated('title', 'uz') }}</td>
                    <td>{{ $tour->price }}</td>
                    <td>{{ $tour->duration }}</td>
                    <td>
                        <a href="{{ route('admin.tours.edit', $tour) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.tours.destroy', $tour) }}" method="POST" class="d-inline"
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

    {{ $tours->links() }}
@endsection