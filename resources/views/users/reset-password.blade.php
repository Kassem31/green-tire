@extends('layouts.app')


@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">

                <h2>{{ __('navigation.reset_password') }}</h2>

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

                <form action="{{ route('profile.resetPassword') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="current_password">{{ __('forms.current_password') }}:</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>
                    <div class="form-group mb-4">
                        <label for="new_password">{{ __('forms.new_password') }}:</label>
                        <input type="password" class="form-control" id="new_password" name="new_password">
                    </div>
                    <div class="form-group mb-4">
                        <label for="new_password_confirmation">{{ __('forms.confirm_new_password') }}:</label>
                        <input type="password" class="form-control" id="new_password_confirmation"
                            name="new_password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('buttons.reset_password') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
