<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Switch Toggle</x-label>
        <x-switch-toggle name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('switch-toggle', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="With Label">
    <div class="sm:max-w-md">
        <x-switch-toggle name="with-label-demo" label="Notifications on" />
    </div>

    <x-slot name="source">
        @demoCode('switch-toggle', 'with-label')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Left Aligned Label">
    <div class="sm:max-w-md">
        <x-switch-toggle name="with-label-left-demo" label="Notifications on" label-position="left" />
    </div>

    <x-slot name="source">
        @demoCode('switch-toggle', 'with-label-left')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Variations">
    <div class="sm:max-w-md space-y-4">
        <x-switch-toggle label="Short Toggle - Default" short />
        <x-switch-toggle label="Short Toggle - Lg" short size="lg" />
        <hr>
        <x-switch-toggle label="Simple Toggle - Sm" size="sm" />
        <x-switch-toggle label="Simple Toggle - Default" />
        <x-switch-toggle label="Simple Toggle - Lg" size="lg" />
    </div>

    <x-slot name="source">
        @demoCode('switch-toggle', 'variations')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Icons">
    <div class="sm:max-w-md">
        <x-switch-toggle label="With Custom On/Off Icons">
            <x-slot name="offIcon">
                <x-heroicon-s-x class="w-3 h-3 text-gray-400" />
            </x-slot>

            <x-slot name="onIcon">
                <x-heroicon-s-check class="w-3 h-3 text-blue-600" />
            </x-slot>
        </x-switch-toggle>
    </div>

    <x-slot name="source">
        @demoCode('switch-toggle', 'icons')
    </x-slot>
</x-component-demo-card>
