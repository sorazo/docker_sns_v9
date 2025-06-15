<button
{{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger w-50 text-light fw-normal border-0']) }}
>
  {{ $slot }}
</button>
