@props(['value'])

<label {{ $attributes->merge(['class' => 'text-base font-medium block mt-0 mb-1']) }}>
    {{ $value ?? $slot }}
</label>
