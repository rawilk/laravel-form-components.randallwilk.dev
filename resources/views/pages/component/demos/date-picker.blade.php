<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Date Picker</x-label>
        <x-date-picker name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('date-picker', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Without Toggle Button">
    <div class="sm:max-w-md">
        <x-label for="without-toggle-demo">Date Picker without Toggle Button</x-label>
        <x-date-picker name="without-toggle-demo" :toggle-icon="false" click-opens />
    </div>

    <x-slot name="source">
        @demoCode('date-picker', 'without-toggle')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Clearable">
    <div class="sm:max-w-md">
        <x-label for="clearable-demo">Optional Date Picker</x-label>
        <x-date-picker name="clearable-demo" :value="now()->format('Y-m-d')" clearable />
    </div>

    <x-slot name="source">
        @demoCode('date-picker', 'clearable')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="With Options">
    <div class="sm:max-w-md">
        <x-label for="options-demo">Custom Options Passed In</x-label>
        <x-date-picker name="options-demo" :options="['mode' => 'multiple']" />

        <p class="mt-2 text-sm text-blue-gray-500">Multiple dates can be selected in this demo.</p>
    </div>

    <x-slot name="source">
        @demoCode('date-picker', 'with-options')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Time Select">
    <div class="sm:max-w-md">
        <x-label for="time-demo">Date Picker With Time Enabled</x-label>
        <x-date-picker name="time-demo" enable-time />
    </div>

    <x-slot name="source">
        @demoCode('date-picker', 'with-time')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Custom Icon">
    <div class="sm:max-w-md">
        <x-label for="custom-icon-demo">Custom Icon For Toggle Button</x-label>
        <x-date-picker name="custom-icon-demo" toggle-icon="heroicon-o-academic-cap" />
    </div>

    <x-slot name="source">
        @demoCode('date-picker', 'custom-icon')
    </x-slot>
</x-component-demo-card>
