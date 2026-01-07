@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add New Slide</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.hero-slides.index') }}">Hero Slides</a></li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus me-1"></i>
                Slide Details
            </div>
            <div class="card-body">
                <form action="{{ route('admin.hero-slides.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="image_path" class="form-label">Slide Image (Required)</label>
                                <input type="file" class="form-control @error('image_path') is-invalid @enderror"
                                    id="image_path" name="image_path" required>
                                @error('image_path')
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

                            <!-- Subtitles -->
                            <div class="mb-3">
                                <label class="form-label">Subtitle</label>
                                <ul class="nav nav-tabs" id="subtitleTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="subtitle-en-tab"
                                            data-bs-toggle="tab" href="#subtitle-en" role="tab">English</a></li>
                                    <li class="nav-item"><a class="nav-link" id="subtitle-uz-tab" data-bs-toggle="tab"
                                            href="#subtitle-uz" role="tab">Uzbek</a></li>
                                    <li class="nav-item"><a class="nav-link" id="subtitle-ru-tab" data-bs-toggle="tab"
                                            href="#subtitle-ru" role="tab">Russian</a></li>
                                </ul>
                                <div class="tab-content border border-top-0 p-3" id="subtitleTabContent">
                                    <div class="tab-pane fade show active" id="subtitle-en" role="tabpanel">
                                        <textarea class="form-control" name="subtitle_en"
                                            rows="2">{{ old('subtitle_en') }}</textarea>
                                    </div>
                                    <div class="tab-pane fade" id="subtitle-uz" role="tabpanel">
                                        <textarea class="form-control" name="subtitle_uz"
                                            rows="2">{{ old('subtitle_uz') }}</textarea>
                                    </div>
                                    <div class="tab-pane fade" id="subtitle-ru" role="tabpanel">
                                        <textarea class="form-control" name="subtitle_ru"
                                            rows="2">{{ old('subtitle_ru') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label">Button Link</label>
                                <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}"
                                    placeholder="e.g. /tours">
                            </div>

                            <div class="mb-3">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" class="form-control" id="order" name="order"
                                    value="{{ old('order', 0) }}">
                            </div>

                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                        value="1" checked>
                                    <label class="form-check-label" for="is_active">Active</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Slide</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection