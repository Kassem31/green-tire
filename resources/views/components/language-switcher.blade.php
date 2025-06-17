@php
    use App\Helpers\LocalizationHelper;
    $currentLocale = LocalizationHelper::getCurrentLocale();
    $languages = LocalizationHelper::getLanguages();
@endphp

<div class="language-switcher">
    <div class="dropdown">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe"></i>
            {{ $languages[$currentLocale] }}
        </button>
        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
            @foreach($languages as $code => $name)
                <li>
                    <a class="dropdown-item {{ $currentLocale == $code ? 'active' : '' }}" 
                       href="{{ route('language.switch', $code) }}">
                        {{ $name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<style>
.language-switcher .dropdown-item.active {
    background-color: #f8f9fa;
    font-weight: bold;
}
</style>