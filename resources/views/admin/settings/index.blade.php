@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">General Settings</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-cogs me-1"></i>
                Footer Information
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="footer_address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="footer_address" name="footer_address"
                                    value="{{ $settings['footer_address'] ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="footer_phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="footer_phone" name="footer_phone"
                                    value="{{ $settings['footer_phone'] ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="footer_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="footer_email" name="footer_email"
                                    value="{{ $settings['footer_email'] ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="footer_copyright" class="form-label">Copyright Text</label>
                                <input type="text" class="form-control" id="footer_copyright" name="footer_copyright"
                                    value="{{ $settings['footer_copyright'] ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
@endsection