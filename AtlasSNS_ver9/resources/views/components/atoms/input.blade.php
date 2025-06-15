<input
    type="{{ $type ?? 'text' }}"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ $value }}"
    {{ $attributes->merge(['class' => 'form-control ']) }}
>
