@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Hotels</h2>
        <a href="{{ route('admin.hotels.create') }}" class="btn btn-primary">Add New Hotel</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name (UZ)</th>
                <th>Stars</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->getTranslated('name', 'uz') }}</td>
                    <td>{{ $hotel->stars }}</td>
                    <td>
                        <a href="{{ route('admin.hotels.edit', $hotel) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.hotels.destroy', $hotel) }}" method="POST" class="d-inline"
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

    {{ $hotels->links() }}
@endsection