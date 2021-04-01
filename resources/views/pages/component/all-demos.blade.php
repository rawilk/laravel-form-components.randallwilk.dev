<x-page title="Demos">

    {{-- header --}}
    <div class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:flex lg:justify-between">

            <div class="max-w-xl">
                <h2 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">Demos</h2>

                <p class="mt-5 text-xl text-gray-400">A collection of demos for Laravel Form Components</p>
            </div>

            <div class="mt-10 w-full max-w-xs">
                <label for="availableDemos" class="block text-base font-medium text-gray-300">Available Demos</label>
                <div x-data="{
                         onChange(url) {
                             window.location = url;
                         },
                     }"
                     class="mt-1.5 relative"
                >
                    <select x-on:change="onChange($refs.select.value)"
                            x-ref="select"
                            id="availableDemos"
                            name="availableDemos"
                            class="appearance-none block w-full bg-none bg-gray-700 border border-transparent rounded-md pl-3 pr-10 py-2 text-base text-white focus:outline-none focus:ring-1 focus:ring-white focus:border-white sm:text-sm"
                    >
                        <option value="">Select a demo</option>
                        @foreach ($availableDemos as $config)
                            <option value="{{ route('component', ['component' => $config['id']]) }}">{{ $config['name'] }}</option>
                        @endforeach
                    </select>

                    <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                        <x-heroicon-s-chevron-down class="h-4 w-4 text-white" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- demo list --}}
    <div class="max-w-7xl mx-auto w-full my-6 py-10 px-4 sm:px-6 lg:px-8 grid gap-16 lg:gap-y-12">
        @foreach ($availableDemos as $config)
            <div>
                <a href="#" class="mt-2 block">
                    <p class="text-xl font-semibold text-gray-900">
                        {{ $config['name'] }}
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                        {{ $config['intro'] }}
                    </p>
                </a>
                <div class="mt-3">
                    <a href="{{ route('component', ['component' => $config['id']]) }}" class="text-base font-semibold text-blue-600 hover:text-blue-500 underline focus:outline-blue-gray">
                        See Demo
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</x-page>
