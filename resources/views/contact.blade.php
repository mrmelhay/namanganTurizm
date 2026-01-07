@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>{{ __('Contact Us') }}</h1>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Email') }}</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Message') }}</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Send Message') }}</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>{{ __('Contact Info') }}</h3>
                <p><strong>{{ __('Address') }}:</strong> {{ __('Namangan city, B.MASHRAB STREET, 2') }}</p>
                <p><strong>{{ __('Phone') }}:</strong> +998 97-255-05-50</p>
                <p><strong>{{ __('Email') }}:</strong> info@namanganturizm.uz</p>
            </div>
        </div>
    </div>
@endsection