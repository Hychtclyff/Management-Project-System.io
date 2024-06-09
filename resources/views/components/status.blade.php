
@props(['color', 'index'])

<span aria-hidden="true"
    class="absolute inset-0 {{ $color }} opacity-50 rounded-full"></span>
{{ $slot }}
