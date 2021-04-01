<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Checkbox</x-label>
        <x-checkbox name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('checkbox', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="With Label">
    <div class="sm:max-w-md">
        <x-checkbox name="with-label-demo" label="Remember me" />

        <div class="mt-2">
            <div class="relative my-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gray-50 text-gray-500">
                        Or via default slot
                    </span>
                </div>
            </div>
            <x-checkbox name="with-label-demo-slotted">Label rendered via default slot</x-checkbox>
        </div>
    </div>

    <x-slot name="source">
        @demoCode('checkbox', 'with-label')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Pre-checked">
    <div class="sm:max-w-md space-y-2">
        <x-checkbox name="pre-checked" id="pre-checked-1">Not checked</x-checkbox>
        <x-checkbox name="pre-checked" id="pre-checked-2" checked>Pre-checked</x-checkbox>
        <x-checkbox name="pre-checked" id="pre-checked-3">Also not checked</x-checkbox>
    </div>

    <x-slot name="source">
        @demoCode('checkbox', 'pre-checked')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Grouped - Stacked">
    <div class="sm:max-w-md">
        <x-checkbox-group>
            <x-checkbox name="stacked-demo" id="stacked-1">Stacked Option 1</x-checkbox>
            <x-checkbox name="stacked-demo" id="stacked-2">Stacked Option 2</x-checkbox>
            <x-checkbox name="stacked-demo" id="stacked-3">Stacked Option 3</x-checkbox>
        </x-checkbox-group>
    </div>

    <x-slot name="source">
        @demoCode('checkbox', 'grouped-stacked')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Grouped - Inline">
    <div class="sm:max-w-md">
        <x-checkbox-group :stacked="false">
            <x-checkbox name="inline-demo" id="inline-1">Inline Option 1</x-checkbox>
            <x-checkbox name="inline-demo" id="inline-2">Inline Option 2</x-checkbox>
            <x-checkbox name="inline-demo" id="inline-3">Inline Option 3</x-checkbox>
            <x-checkbox name="inline-demo" id="inline-4">Inline Option 4</x-checkbox>
            <x-checkbox name="inline-demo" id="inline-5">Inline Option 5</x-checkbox>
        </x-checkbox-group>
    </div>

    <x-slot name="source">
        @demoCode('checkbox', 'grouped-inline')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Grouped - Inline (Custom Columns)">
    <div class="sm:max-w-md">
        <x-checkbox-group :stacked="false" grid-cols="2">
            <x-checkbox name="inline-custom-demo" id="inline-custom-1">Inline Option 1</x-checkbox>
            <x-checkbox name="inline-custom-demo" id="inline-custom-2">Inline Option 2</x-checkbox>
            <x-checkbox name="inline-custom-demo" id="inline-custom-3">Inline Option 3</x-checkbox>
            <x-checkbox name="inline-custom-demo" id="inline-custom-4">Inline Option 4</x-checkbox>
        </x-checkbox-group>
    </div>

    <x-slot name="source">
        @demoCode('checkbox', 'grouped-inline-custom')
    </x-slot>
</x-component-demo-card>
