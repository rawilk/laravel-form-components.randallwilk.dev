<div class="px-5 py-2">
    <a href="{{ $href }}"
       @if ($external) {{ $externalLinkAttributes() }} @endif
       class="text-base text-gray-500 hover:text-gray-400"
    >
        {{ $slot }}
    </a>
</div>
