@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1>{{ __('navigation.tire_types') }}</h1>
            <a href="{{ route('tire-types.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> {{ __('navigation.create_tire_type') }}
            </a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('forms.id') }}</th>
                            <th>{{ __('forms.name_english') }}</th>
                            <th class="mobile-hidden">{{ __('forms.name_arabic') }}</th>
                            <th class="mobile-hidden">{{ __('forms.description') }}</th>
                            <th>{{ __('forms.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tireTypes as $tireType)
                            @if(!$tireType->deleted_at)
                                <tr>
                                    <td>{{ $tireType->id }}</td>
                                    <td>{{ $tireType->name_en }}</td>
                                    <td class="mobile-hidden">{{ $tireType->name_ar }}</td>
                                    <td class="mobile-hidden">{{ $tireType->description }}</td>
                                    <td class="d-flex flex-wrap gap-1">
                                        <a href="{{ route('tire-types.edit', $tireType) }}" class="btn btn-sm btn-primary me-2">
                                            <i class="fas fa-edit"></i> <span class="mobile-hidden">{{ __('buttons.edit') }}</span>
                                        </a>
                                        <form action="{{ route('tire-types.destroy', $tireType) }}" method="POST" onsubmit="return confirm('{{ __('messages.confirm_delete') }}');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> <span class="mobile-hidden">{{ __('buttons.delete') }}</span>
                                            </button>
                                        </form>
                                        <div class="mobile-only w-100 mt-1">
                                            <small>
                                                <strong>{{ __('forms.name_arabic') }}:</strong> {{ $tireType->name_ar }}<br>
                                                <strong>{{ __('forms.description') }}:</strong> {{ Str::limit($tireType->description, 50) }}
                                            </small>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
