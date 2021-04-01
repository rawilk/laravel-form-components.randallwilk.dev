<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Custom Select</x-label>
        <x-custom-select name="basic-usage-demo" :options="['foo', 'bar']" />
    </div>

    <x-slot name="source">
        @demoCode('custom-select', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Model Options">
    <div class="sm:max-w-md">
        <x-label for="model-options-demo">Using Models For Options</x-label>
        <x-custom-select name="model-options-demo"
                         :options="\App\Models\Role::get()"
                         value-field="id"
                         text-field="name"
        />
    </div>

    <x-slot name="source">
        @demoCode('custom-select', 'model-options')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Optional Select">
    <div class="sm:max-w-md">
        <x-label for="optional-demo">Clearable Select</x-label>
        <x-custom-select name="optional-demo"
                         :options="\App\Models\Role::get()"
                         value-field="id"
                         text-field="name"
                         optional
        />
    </div>

    <x-slot name="source">
        @demoCode('custom-select', 'optional')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Multiple Select">
    <div class="sm:max-w-md">
        <x-label for="multiple-demo">Multiple Select</x-label>
        <x-custom-select name="multiple-demo"
                         :options="\App\Models\Role::get()"
                         value-field="id"
                         text-field="name"
                         optional
                         multiple
        />
    </div>

    <x-slot name="source">
        @demoCode('custom-select', 'multiple')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Dependant Selects">
    <div class="sm:max-w-md">
        <livewire:dependant-custom-selects />
    </div>

    <x-slot name="source">
        @demoCode('custom-select', 'dependant-selects')
    </x-slot>
</x-component-demo-card>
