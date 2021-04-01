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
