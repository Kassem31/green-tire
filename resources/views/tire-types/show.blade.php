@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>{{ __('navigation.tire_type_details') }}</h2>
            <div>
                <a href="{{ route('tire-types.edit', $tireType) }}" class="btn btn-primary me-2">
                    <i class="fas fa-edit"></i> {{ __('buttons.edit') }}
                </a>
                <a href="{{ route('tire-types.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> {{ __('buttons.back_to_tire_types') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th style="width: 200px;">{{ __('forms.id') }}</th>
                        <td>{{ $tireType->id }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('forms.name_english') }}</th>
                        <td>{{ $tireType->name_en }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('forms.name_arabic') }}</th>
                        <td>{{ $tireType->name_ar }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('forms.description') }}</th>
                        <td>{{ $tireType->description ?: __('forms.not_available') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('forms.created_at') }}</th>
                        <td>{{ $tireType->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('forms.updated_at') }}</th>
                        <td>{{ $tireType->updated_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
