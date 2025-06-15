<button
{{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-50 text-white fw-semibold border-0']) }}
>
  {{ $slot }}
</button>
