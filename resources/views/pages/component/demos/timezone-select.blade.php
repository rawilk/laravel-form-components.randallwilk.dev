<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Timezone Select</x-label>
        <x-timezone-select name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('timezone-select', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Excluding Regions">
    <div class="sm:max-w-md">
        <x-label for="excluded-regions-demo">Timezone Select with Limited Regions</x-label>
        <x-timezone-select name="excluded-regions-demo"
                           :only="[
                               \Rawilk\FormComponents\Support\TimeZoneRegion::EUROPE,
                               \Rawilk\FormComponents\Support\TimeZoneRegion::AMERICA
                           ]"
        />

        <p class="mt-2 text-sm text-blue-gray-500">Only the America and Europe regions will be present in this demo.</p>
    </div>

    <x-slot name="source">
        @demoCode('timezone-select', 'excluded-regions')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Custom Select">
    <div class="sm:max-w-md">
        <x-label for="excluded-regions-demo">Timezone Select Rendered as Custom Select</x-label>
        <x-timezone-select name="excluded-regions-demo"
                           use-custom-select
                           :only="[
                               \Rawilk\FormComponents\Support\TimeZoneRegion::EUROPE,
                               \Rawilk\FormComponents\Support\TimeZoneRegion::AMERICA
                           ]"
        />

        <p class="mt-2 text-sm text-blue-gray-500">Only the America and Europe regions will be present in this demo.</p>
    </div>

    <x-slot name="source">
        @demoCode('timezone-select', 'custom-select')
    </x-slot>
</x-component-demo-card>
