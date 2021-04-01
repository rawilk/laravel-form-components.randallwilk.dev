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
