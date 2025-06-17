@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('navigation.repair_step_details') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="form-group mb-4">
                        <label for="id">{{ __('forms.id') }}:</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $repairStep->id }}"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="name_ar">{{ __('forms.name_arabic') }}:</label>
                        <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{ $repairStep->name_ar }}"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="name_en">{{ __('forms.name_english') }}:</label>
                        <input type="text" class="form-control" id="name_en" name="name_en" value="{{ $repairStep->name_en }}"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="created_by">{{ __('forms.created_by') }}:</label>
                        <input type="text" class="form-control" id="created_by" name="created_by"
                            value="{{ $repairStep->creator ? $repairStep->creator->name : __('forms.not_available') }}" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="updated_by">{{ __('forms.updated_by') }}:</label>
                        <input type="text" class="form-control" id="updated_by" name="updated_by"
                            value="{{ $repairStep->updater ? $repairStep->updater->name : __('forms.not_available') }}" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <a href="{{ route('repair-steps.index') }}" class="btn btn-secondary">{{ __('buttons.back_to_repair_steps') }}</a>
                        <a href="{{ route('repair-steps.edit', $repairStep->id) }}" class="btn btn-primary">{{ __('buttons.edit_repair_step') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
