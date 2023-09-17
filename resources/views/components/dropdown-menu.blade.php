@props([
    'label' => null,
])

<li class="nav-item">
    <a href="#" class="nav-link dropdown-toggle">
        {{ $label }}
    </a>
    <ul class="dropdown-menu">
        {{ $slot }}
    </ul>
</li>
