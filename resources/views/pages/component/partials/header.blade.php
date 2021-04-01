<div class="bg-gray-800">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:flex lg:justify-between">

        <div class="max-w-xl">
            <h2 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">Demo: {{ $pageTitle }}</h2>

            @if ($intro)
                <p class="mt-5 text-xl text-gray-400">{{ $intro }}</p>
            @endif
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
                    @foreach ($availableDemos as $config)
                        <option value="{{ route('component', ['component' => $config['id']]) }}" @if ($componentName === $config['id']) selected @endif>{{ $config['name'] }}</option>
                    @endforeach
                </select>

                <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                    <x-heroicon-s-chevron-down class="h-4 w-4 text-white" />
                </div>
            </div>
        </div>
    </div>
</div>
