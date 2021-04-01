<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

final class UploadProgress extends Component
{
    use WithFileUploads;

    public $avatar;

    public function updatedAvatar(): void
    {
        $this->validateOnly('avatar', [
            'avatar' => ['image', 'max:1024'],
        ]);
    }
}
