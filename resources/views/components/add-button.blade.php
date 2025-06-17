<div class="d-flex justify-content-start mb-3">
    @permission('create_' . $name)
    <a href="{{ route($model . '.create') }}" class="btn btn-primary">{{ __('navigation.add') }} {{ __('navigation.' . $displayName) }} </a>
    @endpermission
</div>
