@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Language Switcher -->
            <div class="mb-3 text-end">
                <x-language-switcher />
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.welcome') }} - {{ __('navigation.dashboard') }}</h4>
                </div>
                <div class="card-body">
                    <!-- Basic Translation Examples -->
                    <h5>{{ __('messages.hello') }}</h5>
                    <p>{{ __('messages.please_wait') }}</p>
                    
                    <!-- Using @lang directive -->
                    <p>@lang('messages.thank_you')</p>
                    
                    <!-- Navigation translations -->
                    <nav class="nav nav-pills mb-3">
                        <a class="nav-link" href="#">{{ __('navigation.home') }}</a>
                        <a class="nav-link" href="#">{{ __('navigation.users') }}</a>
                        <a class="nav-link" href="#">{{ __('navigation.reports') }}</a>
                        <a class="nav-link" href="#">{{ __('navigation.settings') }}</a>
                    </nav>

                    <!-- Form with translations -->
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('navigation.name') }}</label>
                            <input type="text" class="form-control" id="name" placeholder="{{ __('navigation.name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('navigation.email') }}</label>
                            <input type="email" class="form-control" id="email" placeholder="{{ __('navigation.email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('navigation.password') }}</label>
                            <input type="password" class="form-control" id="password" placeholder="{{ __('navigation.password') }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
                        <button type="button" class="btn btn-secondary">{{ __('messages.cancel') }}</button>
                    </form>

                    <!-- Status examples -->
                    <div class="mt-4">
                        <h6>{{ __('navigation.status') }}:</h6>
                        <span class="badge bg-success">{{ __('navigation.active') }}</span>
                        <span class="badge bg-secondary">{{ __('navigation.inactive') }}</span>
                    </div>

                    <!-- Authentication translations -->
                    <div class="mt-4">
                        <h6>{{ __('messages.login') }}:</h6>
                        <p>{{ __('auth.failed') }}</p>
                        <p>{{ __('auth.throttle', ['seconds' => 60]) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
