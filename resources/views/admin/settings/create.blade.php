@extends('layouts.admin')

@section('content')
    <h2>Create Setting</h2>
    <form action="{{ route('admin.settings.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Key</label>
            <input type="text" name="key" class="form-control" placeholder="e.g., site_title" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Value</label>
            <textarea name="value" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection