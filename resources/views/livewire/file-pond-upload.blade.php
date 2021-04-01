<div>
    <x-file-pond wire:model="upload" description="Any file under 1 mb" />

    <x-form-error name="upload" />

    @if ($upload)
        <div id="filepond-uploaded-file" class="mt-4">
            <p class="text-sm text-blue-gray-600">Chosen File: {{ $upload->getClientOriginalName() }}</p>

            @if ($this->uploadHasPreview)
                <span class="block h-20 w-20 mt-4">
                    <img class="rounded-full w-full"
                         src="{{ $upload->temporaryUrl() }}"
                         alt="filepond preview"
                    >
                </span>
            @endif
        </div>
    @endif
</div>
