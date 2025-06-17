@extends('layouts.app')


@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('navigation.create_user') }}</h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('profile.storeUser') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="name">{{ __('forms.name') }}</label>
                        <input id="name" type="text" name="name" placeholder="{{ __('forms.enter_name') }}" class="form-control"
                            required="">
                    </div>

                    <div class="form-group mb-4">
                        <label for="email">{{ __('forms.email') }}:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('forms.enter_email') }}"
                            value="{{ old('email') }}">
                    </div>

                    <div class="form-group mb-4">
                        <label for="is_active">{{ __('forms.is_active') }}:</label>
                        <div class="responsive-checkbox-wrapper">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                                {{ old('is_active') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">{{ __('forms.user_account_is_active') }}</label>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="role">{{ __('forms.role') }}:</label>
                        <select class="form-control" id="role_select" name="role_id" class="form-control"
                            placeholder="{{ __('forms.select_role') }}" autocomplete="off">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex flex-column flex-md-row gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">{{ __('buttons.create') }}</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">{{ __('buttons.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

