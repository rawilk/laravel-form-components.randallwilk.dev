{{-- this partial is not meant to be used directly --}}
<{{ $tag }}
    @if ($href)
        href="{{ $href }}"
    @endif

    {{ $attributes->class($buttonClasses . ' ' . $sizeClass()) }}
>
    {{ $slot }}
</{{ $tag }}>
