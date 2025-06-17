@extends('layouts.app')

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="page-title">
            <h3>{{ __('navigation.create_role') }}</h3>
        </div>
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="name">{{ __('forms.name') }}</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="display_name">{{ __('forms.display_name') }}</label>
                        <input type="text" name="display_name" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="description">{{ __('forms.description') }}</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="permissions">{{ __('forms.permissions') }}</label>
                        <div class="mb-3">
                            <button type="button" class="btn btn-sm btn-success" onclick="checkAllPermissions()">
                                <i class="fas fa-check-square"></i> {{ __('forms.check_all') }}
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" onclick="clearAllPermissions()">
                                <i class="fas fa-square"></i> {{ __('forms.clear_all') }}
                            </button>
                        </div>
                        @foreach ($permissions as $model => $modelPermissions)
                            <div class="card mb-3 col-md-8">
                                <div class="card-header">
                                    {{ ucfirst($model) }} {{ __('forms.permissions') }}
                                </div>
                                <div class="card-body">
                                    @foreach ($modelPermissions as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                                class="form-check-input permission-checkbox">
                                            <label class="form-check-label">{{ $permission->display_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('buttons.create') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        function checkAllPermissions() {
            const checkboxes = document.querySelectorAll('.permission-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = true;
            });
        }

        function clearAllPermissions() {
            const checkboxes = document.querySelectorAll('.permission-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        }
    </script>
@endsection
