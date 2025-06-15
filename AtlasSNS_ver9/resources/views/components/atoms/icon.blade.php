<img
    src="{{ asset(isset($src) && $src ? $src : 'images/icon1.png') }}"
    alt="{{ $alt ?? '' }}"
    {{ $attributes->merge(['class' => 'img-fluid']) }}
>
