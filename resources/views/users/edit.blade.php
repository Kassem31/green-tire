@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('navigation.edit_user') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-4">
                            <label for="name">{{ __('forms.name') }}:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}">
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">{{ __('forms.email') }}:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}">
                        </div>


                        <div class="form-group mb-4">
                            <label for="role">{{ __('forms.role') }}:</label>
                            <select class="form-control" id="role_select" name="role_id" class="form-control"
                                placeholder="{{ __('forms.select_role') }}" autocomplete="off">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="is_active">{{ __('forms.is_active') }}:</label>
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                                {{ $user->is_active ? 'checked' : '' }}>
                        </div>

                        <div class="form-group mb-4">
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">{{ __('buttons.back_to_users') }}</a>
                            <button type="submit" class="btn btn-primary">{{ __('buttons.update_user') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
