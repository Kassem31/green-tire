@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('navigation.create_repair_step') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <form action="{{ route('repair-steps.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="name_ar">{{ __('forms.name_arabic') }}:</label>
                            <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{ old('name_ar') }}">
                            @error('name_ar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="name_en">{{ __('forms.name_english') }}:</label>
                            <input type="text" class="form-control" id="name_en" name="name_en" value="{{ old('name_en') }}">
                            @error('name_en')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <a href="{{ route('repair-steps.index') }}" class="btn btn-secondary">{{ __('buttons.back_to_repair_steps') }}</a>
                            <button type="submit" class="btn btn-primary">{{ __('buttons.create_repair_step') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
