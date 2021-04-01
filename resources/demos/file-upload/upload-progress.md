Livewire component class:

```php
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
```

Livewire component markup:

```html
<div>
    <x-label class="mb-4">Avatar</x-label>

    <x-file-upload wire:model="avatar"
                   name="avatar"
                   label="Select new avatar"
    >
        <div>
            @if ($avatar && ! $errors->has('avatar'))
                <span class="block h-20 w-20">
                    <img class="rounded-full w-full"
                         src="{{ $avatar->temporaryUrl() }}"
                         alt="avatar preview"
                    >
                </span>
            @else
                <span class="block h-20 w-20 rounded-full overflow-hidden"
                      id="no-avatar-chosen"
                >
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </span>
            @endif
        </div>
    </x-file-upload>

    <x-form-error name="avatar" />
</div>
```
