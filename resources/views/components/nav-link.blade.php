@props([
    'routeName' => null,
    'label' => null,
    'isVerbose' => false,
])
@if (Route::currentRouteName() == $routeName)
    <li class="nav-item">
        @if ($isVerbose)
            <a class="nav-link active" href="{{ $routeName }}">{{ $label }}</a>
        @else
            <a class="nav-link active" href="{{ route($routeName) }}">{{ $label }}</a>
        @endif
    </li>
@else
    <li class="nav-item">
        @if ($isVerbose)
            <a class="nav-link" href="{{ $routeName }}">{{ $label }}</a>
        @else
            <a class="nav-link" href="{{ route($routeName) }}">{{ $label }}</a>
        @endif
    </li>
@endif
