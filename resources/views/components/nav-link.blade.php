@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white text-lg leading-5 text-secondary focus:outline-none focus:border-secondary transition duration-150 ease-in-out font-semibold'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg leading-5 text-secondary hover:text-white hover:border-white focus:outline-none focus:text-white focus:border-white transition duration-150 ease-in-out font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
