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
