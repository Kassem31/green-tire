@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>{{ __('navigation.create_tire_type') }}</h2>
        </div>

        <div class="card-body">
            <form action="{{ route('tire-types.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name_en" class="form-label">{{ __('forms.name_english') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en" value="{{ old('name_en') }}" required>
                    @error('name_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name_ar" class="form-label">{{ __('forms.name_arabic') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="name_ar" name="name_ar" value="{{ old('name_ar') }}" required>
                    @error('name_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">{{ __('forms.description') }}</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex flex-column flex-md-row gap-2">
                    <button type="submit" class="btn btn-primary">{{ __('buttons.create_tire_type') }}</button>
                    <a href="{{ route('tire-types.index') }}" class="btn btn-secondary">{{ __('buttons.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
