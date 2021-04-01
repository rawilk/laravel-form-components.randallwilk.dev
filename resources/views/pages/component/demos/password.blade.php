<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Password Input</x-label>
        <x-password name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('password', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Hide Password Toggle">
    <div class="sm:max-w-md">
        <x-label for="hide-toggle-demo">Show Toggle Button Disabled</x-label>
        <x-password name="hide-toggle-demo" :show-toggle="false" />
    </div>

    <x-slot name="source">
        @demoCode('password', 'hide-toggle')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Addons">
    <div class="sm:max-w-md">
        <x-label for="addons-demo">Password With Leading Icon</x-label>
        <x-password name="addons-demo">
            <x-slot name="leadingIcon">
                <x-heroicon-o-lock-closed />
            </x-slot>
        </x-password>
    </div>

    <x-slot name="source">
        @demoCode('password', 'addons')
    </x-slot>
</x-component-demo-card>
