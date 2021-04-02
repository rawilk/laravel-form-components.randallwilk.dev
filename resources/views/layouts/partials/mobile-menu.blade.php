<div x-data="{ open: false }"
     x-on:set-nav-open.window="open = $event.detail"
     x-on:keydown.escape.window="$dispatch('set-nav-open', false)"
     x-on:click.away="$dispatch('set-nav-open', false)"
     @include('partials.alpine-transitions.mobile-menu')
     x-show="open"
     x-cloak
     class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
>
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 sm:pb-8">
            <div class="flex items-center justify-between">
                {{-- logo --}}
                <div>
                    <a href="{{ route('home') }}">
                        <x-logo />
                    </a>
                </div>

                {{-- toggle button --}}
                <div class="-mr-2">
                    <button x-on:click="$dispatch('set-nav-open', false)"
                            type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                    >
                        <span class="sr-only">Close menu</span>
                        <x-heroicon-o-x class="h-6 w-6" />
                    </button>
                </div>
            </div>

            <div class="mt-6 sm:mt-8">
                <nav>
                    <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
                        @foreach (config('docs.mobile_nav', []) as $slug => $label)
                            <a href="{{ route('component', ['component' => $slug]) }}"
                               class="-m-3 flex items-center p-3 rounded-lg focus:outline-blue-gray hover:bg-gray-50 {{ request()->fullUrlIs(route('component', ['component' => $slug])) ? 'bg-gray-100' : '' }}"
                            >
                                <span class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-500 text-white sm:h-12 sm:w-12">
                                    <x-heroicon-s-code class="h-6 w-6" />
                                </span>

                                <span class="ml-4 text-base font-medium text-gray-900">
                                    {{ $label }}
                                </span>
                            </a>
                        @endforeach
                    </div>

                    <div class="mt-8 text-base">
                        <a href="{{ route('demos') }}" class="font-medium text-blue-600 hover:text-blue-500"> View all demos <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="py-6 px-5">
            <div class="grid grid-cols-2 gap-4">
                <x-mobile-menu-item :href="config('docs.url')" external>Docs</x-mobile-menu-item>
            </div>
        </div>
    </div>
</div>
