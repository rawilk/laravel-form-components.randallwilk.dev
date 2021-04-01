<div class="w-full max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
    <h2 class="text-3xl font-extrabold text-blue-gray-600 tracking-tight">Components</h2>
    <p class="mt-4 max-w-3xl text-lg text-blue-gray-500">
        Pre-built form components built for a majority of use cases. Each component integrates easily with Laravel Livewire and is
        styled based on Tailwind UI.
    </p>

    <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 text-center">

        @foreach (config('docs.feature_list', []) as $slug => $config)
            <div class="pt-6">
                <div class="flow-root bg-white shadow-sm h-full rounded-lg px-6 pb-8 flex flex-col justify-between">
                    <div class="-mt-6 flex-1 h-full">
                        <div>
                            <span class="inline-flex items-center justify-center p-3 bg-blue-gray-200 rounded-md shadow-lg">
                                <x-heroicon-s-code class="h-6 w-6 text-blue-gray-400" />
                            </span>
                        </div>

                        <h3 class="mt-6 text-lg font-medium text-blue-gray-900 tracking-tight">{{ $config['name'] }}</h3>
                        <p class="mt-5 text-base text-blue-gray-500">
                            {{ $config['about'] }}
                        </p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ config('docs.url') }}/{{ config('docs.current_version') }}/{{ $config['docs'] ?? '#' }}"
                           target="_blank"
                           rel="nofollow noopener noreferrer"
                           class="text-sm text-blue-600 underline hover:text-blue-500 focus:outline-blue-gray"
                        >
                            Docs
                        </a>

                        @if (demoExists($slug))
                            <a href="{{ route('component', ['component' => $slug]) }}" class="ml-4 text-sm text-blue-600 underline hover:text-blue-500 focus:outline-blue-gray">
                                Demo
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
