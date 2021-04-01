Livewire Component Class:

```php
<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

final class DependantCustomSelects extends Component
{
    public $roles;
    public $users;

    public $roleId;
    public $userId;

    public $selectedUser;

    public function updatedRoleId($id): void
    {
        $this->users = User::where('role_id', $id)->get();
        $this->reset('userId', 'selectedUser');

        $this->emitSelf('users-updated', $this->users);
    }

    public function updatedUserId($id): void
    {
        $this->selectedUser = $this->users->where('id', $id)->first();
    }

    public function mount(): void
    {
        $this->roles = Role::all();
        $this->roleId = $this->roles->first()->id;

        $this->users = User::where('role_id', $this->roleId)->get();
    }
}
```

Livewire Component Markup:
```html
<div>
    <x-form-group name="roleId" label="Role">
        <x-custom-select wire:model="roleId"
                         :options="$roles"
                         value-field="id"
                         text-field="name"
        />
    </x-form-group>

    <x-form-group name="userId" label="User">
        <x-custom-select wire:model="userId"
                         :options="$users"
                         value-field="id"
                         text-field="name"
                         optional
                         :wire-listeners="['users-updated']"
        />
    </x-form-group>

    <p class="text-sm text-blue-gray-500">User options will change depending on which role is selected.</p>

    <hr class="my-4">

    <div>
        <p class="text-sm text-blue-gray-600">
            @if ($selectedUser)
                <span class="block">Selected User:</span>
                <pre class="text-xs block mt-2 text-blue-gray-600">{!! json_encode($selectedUser, JSON_PRETTY_PRINT) !!}</pre>
            @else
                Selected User: No user selected
            @endif
        </p>
    </div>
</div>
```
