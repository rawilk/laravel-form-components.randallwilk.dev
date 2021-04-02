<div x-data="{ open: false }"
     x-on:click.away="open = false"
     x-on:keydown.escape.window="open = false"
>
    <button type="button"
            class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
            x-bind:class="{ 'text-gray-900': open, 'text-gray-500': ! open }"
            x-bind:aria-expanded="JSON.stringify(open)"
            x-on:click="open = ! open"
    >
        <span>{{ $label }}</span>
        <x-heroicon-s-chevron-down class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" />
    </button>

    <div x-show="open"
         x-cloak
         @include('partials.alpine-transitions.flyout-menu')
         class="hidden md:block absolute z-10 top-full inset-x-0 transform shadow-lg bg-white"
    >
        {{ $slot }}
    </div>
</div>
