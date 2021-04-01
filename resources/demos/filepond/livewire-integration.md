Livewire Component Class:

```php
<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

final class FilePondUpload extends Component
{
    use WithFileUploads;

    /** @var null|\Livewire\TemporaryUploadedFile */
    public $upload;

    public function getUploadHasPreviewProperty(): bool
    {
        if (! $this->upload) {
            return false;
        }

        $supportedPreviewTypes = config('livewire.temporary_file_upload.preview_mimes');

        return in_array($this->upload->guessExtension(), $supportedPreviewTypes, true);
    }

    public function updatedUpload($value): void
    {
        $this->resetErrorBag();

        if (is_null($value)) {
            return;
        }

        try {
            $this->validateOnly('upload', [
                'upload' => ['required', 'max:1024'],
            ]);
        } catch (ValidationException $e) {
            $this->upload = null;
            $this->dispatchBrowserEvent('file-pond-clear', ['id' => $this->id]);

            throw $e;
        }
    }
}
```

Livewire Component Markup:

```html
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
```
