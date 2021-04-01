<header class="relative bg-white sticky top-0 z-50">
    <div class="absolute inset-0 shadow z-30 pointer-events-none" aria-hidden="true"></div>

    <div class="relative z-20">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-5 sm:px-6 sm:py-4 lg:px-8 md:justify-start md:space-x-10">
            <div>
                <a href="{{ route('home') }}" class="flex">
                    <x-logo />
                </a>
            </div>

            {{-- mobile menu toggle --}}
            <div class="-mr-2 -my-2 md:hidden">
                <button x-data="{ open: false }"
                        x-on:set-nav-open.window="open = $event.detail"
                        x-init="$watch('open', value => { $dispatch('set-nav-open', value) })"
                        x-on:click="open = ! open"
                        x-bind:aria-expanded="JSON.stringify(open)"
                        type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                >
                    <span class="sr-only">Open menu</span>
                    <x-heroicon-s-menu class="h-6 w-6" />
                </button>
            </div>

            {{-- main menu --}}
            <div class="hidden md:flex-1 md:flex md:items-center md:justify-end">
                <nav class="flex space-x-10">
                    <x-header-dropdown-menu label="Demos">
                        @include('layouts.partials.component-menu')
                    </x-header-dropdown-menu>

                    <x-menu-item href="{{ config('docs.url') }}" external>
                        Docs
                    </x-menu-item>
                </nav>
            </div>
        </div>
    </div>

    {{-- mobile menu --}}
    @include('layouts.partials.mobile-menu')
</header>
