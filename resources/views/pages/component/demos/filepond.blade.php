<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-file-pond />
    </div>

    <p class="text-base mt-8 max-w-prose text-blue-gray-600">
        No files are uploaded to the server in this demo.
    </p>

    <x-slot name="source">
        @demoCode('filepond', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Livewire Integration">
    <div class="sm:max-w-md">
        <livewire:file-pond-upload />
    </div>

    <p class="mt-8 text-base text-blue-gray-600 max-w-prose">
        This FilePond instance will allow a single upload of any file under 1 mb.
        We'll delete any files that are older than 10 minutes.
    </p>

    <x-slot name="source">
        @demoCode('filepond', 'livewire-integration')
    </x-slot>
</x-component-demo-card>
