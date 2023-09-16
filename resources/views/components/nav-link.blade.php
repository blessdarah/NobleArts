@props([
    'routeName' => null,
    'label' => null,
])
@if (Route::currentRouteName() == $routeName)
    <li><a class="active" href="{{ route($routeName) }}">{{ $label }}</a></li>
@else
    <li><a href="{{ route($routeName) }}">{{ $label }}</a></li>
@endif
