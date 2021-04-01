<div x-data="{ view: 'demo' }">
    <div class="pt-5 pb-3 border-b border-blue-gray-300 sm:flex sm:justify-between sm:items-center">
        <h2 class="text-lg text-blue-gray-600 sm:text-xl md:text-2xl sm:flex-shrink-0 pb-2 border-b border-blue-gray-300 sm:pb-0 sm:border-b-0">
            {{ $title }}
        </h2>

        <div class="mt-5 mx-auto flex sm:mt-0 sm:justify-end sm:flex-1">
            <div>
                <a href="#"
                   role="button"
                   class="text-sm md:text-base text-blue-gray-600 hover:text-blue-gray-900 focus:outline-blue-gray"
                   x-bind:class="{ 'font-medium underline': view === 'demo' }"
                   x-on:click.prevent="view = 'demo'"
                >
                    Demo
                </a>
            </div>
            <div class="ml-3">
                <a href="#"
                   role="button"
                   class="text-sm md:text-base text-blue-gray-600 hover:text-blue-gray-900 focus:outline-blue-gray"
                   x-bind:class="{ 'font-medium underline': view === 'source' }"
                   x-on:click.prevent="view = 'source'"
                >
                    Source
                </a>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <div x-show="view === 'demo'">
            {{ $slot }}
        </div>

        <div x-show="view === 'source'">
            {{ $source }}
        </div>
    </div>
</div>
