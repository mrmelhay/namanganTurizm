@extends('layouts.admin')

@section('content')
    <h2>Manage About Page</h2>
    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-header bg-white fw-bold">Title</div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="titleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="title-uz-tab" data-bs-toggle="tab" href="#title-uz"
                                    role="tab">UZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="title-ru-tab" data-bs-toggle="tab" href="#title-ru"
                                    role="tab">RU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="title-en-tab" data-bs-toggle="tab" href="#title-en"
                                    role="tab">EN</a>
                            </li>
                        </ul>
                        <div class="tab-content p-3 border border-top-0 rounded-bottom" id="titleTabContent">
                            <div class="tab-pane fade show active" id="title-uz" role="tabpanel">
                                <input type="text" name="title[uz]" class="form-control"
                                    value="{{ $about->getTranslated('title', 'uz') }}" placeholder="Sarlavha (UZ)">
                            </div>
                            <div class="tab-pane fade" id="title-ru" role="tabpanel">
                                <input type="text" name="title[ru]" class="form-control"
                                    value="{{ $about->getTranslated('title', 'ru') }}" placeholder="Заголовок (RU)">
                            </div>
                            <div class="tab-pane fade" id="title-en" role="tabpanel">
                                <input type="text" name="title[en]" class="form-control"
                                    value="{{ $about->getTranslated('title', 'en') }}" placeholder="Title (EN)">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-white fw-bold">Content</div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="contentTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="content-uz-tab" data-bs-toggle="tab" href="#content-uz"
                                    role="tab">UZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="content-ru-tab" data-bs-toggle="tab" href="#content-ru"
                                    role="tab">RU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="content-en-tab" data-bs-toggle="tab" href="#content-en"
                                    role="tab">EN</a>
                            </li>
                        </ul>
                        <div class="tab-content p-3 border border-top-0 rounded-bottom" id="contentTabContent">
                            <div class="tab-pane fade show active" id="content-uz" role="tabpanel">
                                <textarea name="content[uz]"
                                    class="form-control">{{ $about->getTranslated('content', 'uz') }}</textarea>
                            </div>
                            <div class="tab-pane fade" id="content-ru" role="tabpanel">
                                <textarea name="content[ru]"
                                    class="form-control">{{ $about->getTranslated('content', 'ru') }}</textarea>
                            </div>
                            <div class="tab-pane fade" id="content-en" role="tabpanel">
                                <textarea name="content[en]"
                                    class="form-control">{{ $about->getTranslated('content', 'en') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header bg-white fw-bold">Image</div>
                    <div class="card-body">
                        @if($about->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid rounded border">
                            </div>
                        @endif
                        <input type="file" name="image" class="form-control">
                        <div class="form-text text-muted">Dimensions: 800x600 recommended.</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 p-2 fs-5">Save Changes</button>
            </div>
        </div>
    </form>
@endsection