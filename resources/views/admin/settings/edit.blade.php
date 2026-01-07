@extends('layouts.admin')

@section('content')
    <h2>Edit Setting</h2>
    <form action="{{ route('admin.settings.update', $setting) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Key</label>
            <input type="text" name="key" class="form-control" value="{{ $setting->key }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Value</label>
            <textarea name="value" class="form-control" rows="3" required>{{ $setting->value }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection