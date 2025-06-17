@permission('show_' . $name)
    <a href="{{ route($route, $param) }}" class="btn btn-info btn-sm" title="{{ __('navigation.show') }} {{ ucfirst($name) }}">
        <i class="fas fa-eye"></i> <span>{{ __('navigation.show') }}</span>
    </a>
@endpermission
