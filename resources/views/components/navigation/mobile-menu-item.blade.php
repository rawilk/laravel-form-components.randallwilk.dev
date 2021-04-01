<a href="{{ $href }}"
   @if ($external) {{ $externalLinkAttributes() }} @endif
   {{ $attributes->class('rounded-md text-base font-medium text-gray-900 hover:text-gray-700' . ($active ? ' font-semibold' : '')) }}
>
    {{ $slot }}
</a>
