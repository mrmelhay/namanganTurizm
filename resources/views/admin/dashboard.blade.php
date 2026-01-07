@extends('layouts.admin')

@section('content')
    <h2>Dashboard</h2>
    <p>Welcome to the Admin Panel.</p>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Tours</h5>
                    <p class="card-text">Manage Tours</p>
                    <a href="{{ route('admin.tours.index') }}" class="btn btn-light btn-sm">Go</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Hotels</h5>
                    <p class="card-text">Manage Hotels</p>
                    <a href="{{ route('admin.hotels.index') }}" class="btn btn-light btn-sm">Go</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Gallery</h5>
                    <p class="card-text">Manage Gallery</p>
                    <a href="{{ route('admin.galleries.index') }}" class="btn btn-light btn-sm">Go</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <p class="card-text">Manage Posts</p>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-light btn-sm">Go</a>
                </div>
            </div>
        </div>
    </div>
@endsection