<li class="flow-root">
    <a href="{{ $href }}"
       {{ $attributes->merge(['class' => '-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 focus:outline-blue-gray hover:bg-gray-50' . ($active ? ' bg-gray-100' : '')]) }}
    >
        <x-dynamic-component :component="$icon" class="flex-shrink-0 h-6 w-6 text-gray-400" />
        <span class="ml-4">{{ $slot }}</span>
    </a>
</li>
