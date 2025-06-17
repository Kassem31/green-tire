@permission('edit_' . $name)
    <a href="{{ route($route, $param) }}" class="btn btn-warning btn-sm" title="{{ __('navigation.edit') }} {{ ucfirst($name) }}">
        <i class="fas fa-edit"></i> <span>{{ __('navigation.edit') }}</span>
    </a>
@endpermission
