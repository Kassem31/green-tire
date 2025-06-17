@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('navigation.user_details') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="form-group mb-4">
                        <label for="name">{{ __('forms.name') }}:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="email">{{ __('forms.email') }}:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                            readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="role">{{ __('forms.role') }}:</label>
                        <input type="text" class="form-control" id="role" name="role"
                            value="{{ implode(', ', $user->getRoleNames()) }}" readonly>
                    </div>

                    <div class="form-group mb-4">
                        <label for="is_active">{{ __('forms.is_active') }}:</label>
                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                            disabled {{ $user->is_active ? 'checked' : '' }}>
                    </div>

                    <div class="form-group mb-4">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">{{ __('buttons.back_to_users') }}</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">{{ __('buttons.edit_user') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
