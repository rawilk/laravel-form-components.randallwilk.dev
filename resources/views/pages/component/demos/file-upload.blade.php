<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo" class="mb-2">Basic File Upload Input</x-label>
        <x-file-upload name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('file-upload', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Upload Progress / File Preview">
    <div class="sm:max-w-md">
        <livewire:upload-progress />
    </div>

    <p class="text-base mt-8 text-blue-gray-600 max-w-prose">
        The file upload above will accept image uploads and display a preview of the image you selected before you actually upload the file.
        We'll delete any files that are older than 10 minutes. You can test out the component with any file under 1 mb.
    </p>

    <x-slot name="source">
        @demoCode('file-upload', 'upload-progress')
    </x-slot>
</x-component-demo-card>
