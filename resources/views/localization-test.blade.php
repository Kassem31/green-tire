@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('navigation.language') }} {{ __('messages.test') }}</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>{{ __('navigation.dashboard') }}</h5>
                            <p>{{ __('messages.welcome') }}</p>
                            <p><strong>{{ __('navigation.current_language') }}:</strong> {{ app()->getLocale() == 'ar' ? __('navigation.arabic') : __('navigation.english') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>{{ __('auth.login') }}</h5>
                            <p>{{ __('auth.failed') }}</p>
                            <p>{{ __('passwords.reset') }}</p>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>{{ __('navigation.actions') }}</h5>
                            <ul>
                                <li>{{ __('navigation.create') }}</li>
                                <li>{{ __('navigation.edit') }}</li>
                                <li>{{ __('navigation.delete') }}</li>
                                <li>{{ __('navigation.view') }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>{{ __('navigation.status') }}</h5>
                            <ul>
                                <li>{{ __('navigation.active') }}</li>
                                <li>{{ __('navigation.inactive') }}</li>
                                <li>{{ __('navigation.online') }}</li>
                                <li>{{ __('navigation.offline') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h5>Validation Examples</h5>
                            <p>{{ __('validation.required', ['attribute' => __('navigation.name')]) }}</p>
                            <p>{{ __('validation.email', ['attribute' => __('navigation.email')]) }}</p>
                            <p>{{ __('validation.min.string', ['attribute' => __('navigation.password'), 'min' => 8]) }}</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5>{{ __('messages.language_switching') }}</h5>
                        <div class="btn-group" role="group">
                            <a href="{{ route('language.switch', 'en') }}" class="btn btn-outline-primary {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                                🇺🇸 {{ __('navigation.english') }}
                            </a>
                            <a href="{{ route('language.switch', 'ar') }}" class="btn btn-outline-primary {{ app()->getLocale() == 'ar' ? 'active' : '' }}">
                                🇸🇦 {{ __('navigation.arabic') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection