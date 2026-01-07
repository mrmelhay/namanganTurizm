@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add New Feature</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.features.index') }}">Features</a></li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus me-1"></i>
                Feature Details
            </div>
            <div class="card-body">
                <form action="{{ route('admin.features.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon Class (Bootstrap Icons)</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon"
                                    name="icon" placeholder="bi bi-geo-alt" required value="{{ old('icon') }}">
                                <small class="text-muted">Use <a href="https://icons.getbootstrap.com/"
                                        target="_blank">Bootstrap Icons</a> classes.</small>
                                @error('icon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Titles -->
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <ul class="nav nav-tabs" id="titleTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="title-en-tab" data-bs-toggle="tab"
                                            href="#title-en" role="tab">English</a></li>
                                    <li class="nav-item"><a class="nav-link" id="title-uz-tab" data-bs-toggle="tab"
                                            href="#title-uz" role="tab">Uzbek</a></li>
                                    <li class="nav-item"><a class="nav-link" id="title-ru-tab" data-bs-toggle="tab"
                                            href="#title-ru" role="tab">Russian</a></li>
                                </ul>
                                <div class="tab-content border border-top-0 p-3" id="titleTabContent">
                                    <div class="tab-pane fade show active" id="title-en" role="tabpanel">
                                        <input type="text" class="form-control" name="title_en" required
                                            value="{{ old('title_en') }}">
                                    </div>
                                    <div class="tab-pane fade" id="title-uz" role="tabpanel">
                                        <input type="text" class="form-control" name="title_uz"
                                            value="{{ old('title_uz') }}">
                                    </div>
                                    <div class="tab-pane fade" id="title-ru" role="tabpanel">
                                        <input type="text" class="form-control" name="title_ru"
                                            value="{{ old('title_ru') }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Descriptions -->
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <ul class="nav nav-tabs" id="descTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="desc-en-tab" data-bs-toggle="tab"
                                            href="#desc-en" role="tab">English</a></li>
                                    <li class="nav-item"><a class="nav-link" id="desc-uz-tab" data-bs-toggle="tab"
                                            href="#desc-uz" role="tab">Uzbek</a></li>
                                    <li class="nav-item"><a class="nav-link" id="desc-ru-tab" data-bs-toggle="tab"
                                            href="#desc-ru" role="tab">Russian</a></li>
                                </ul>
                                <div class="tab-content border border-top-0 p-3" id="descTabContent">
                                    <div class="tab-pane fade show active" id="desc-en" role="tabpanel">
                                        <textarea class="form-control" name="description_en"
                                            rows="3">{{ old('description_en') }}</textarea>
                                    </div>
                                    <div class="tab-pane fade" id="desc-uz" role="tabpanel">
                                        <textarea class="form-control" name="description_uz"
                                            rows="3">{{ old('description_uz') }}</textarea>
                                    </div>
                                    <div class="tab-pane fade" id="desc-ru" role="tabpanel">
                                        <textarea class="form-control" name="description_ru"
                                            rows="3">{{ old('description_ru') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" class="form-control" id="order" name="order"
                                    value="{{ old('order', 0) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Create Feature</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection