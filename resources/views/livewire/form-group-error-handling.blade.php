<div>
    <x-form-group label="First name" name="firstName" input-id="error-handling-first_name" inline>
        <x-input wire:model.lazy="firstName"
                 name="firstName"
                 id="error-handling-first_name"
        />
    </x-form-group>

    <x-form-group label="Last name" name="lastName" input-id="error-handling-last_name" inline>
        <x-input wire:model.lazy="lastName"
                 name="lastName"
                 id="error-handling-last_name"
        />
    </x-form-group>

    <x-form-group label="Email" name="email" input-id="error-handling-email" inline>
        <x-email wire:model.lazy="email"
                 name="email"
                 id="error-handling-email"
        />
    </x-form-group>

    <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-4">
        <div class="w-full sm:w-auto">
            <x-light-blue-button wire:click="validateAll" size="md">
                Validate
            </x-light-blue-button>
        </div>

        <div class="w-full sm:w-auto">
            <x-white-button wire:click="resetForm" size="md">Reset</x-white-button>
        </div>
    </div>
</div>
