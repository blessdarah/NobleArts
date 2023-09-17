@props([
    'routeName' => null,
    'label' => null,
])
@if (Route::currentRouteName() == $routeName)
    <li class="nav-item">
        <a class="nav-link active" href="{{ route($routeName) }}">{{ $label }}</a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route($routeName) }}">{{ $label }}</a>
    </li>
@endif
