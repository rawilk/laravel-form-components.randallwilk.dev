<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Select</x-label>
        <x-select name="basic-usage-demo">
            <option value="">Select an option</option>
            <option value="can">Canada</option>
            <option value="usa">United States</option>
        </x-select>
    </div>

    <x-slot name="source">
        @demoCode('select', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Options Array">
    <div class="sm:max-w-md">
        <x-label for="options-array-demo">Select Rendered From Options Array</x-label>
        <x-select name="options-array-demo"
                  :options="[
                      '' => 'Select an option',
                      'can' => 'Canada',
                      'usa' => 'United States',
                  ]"
        />
    </div>

    <x-slot name="source">
        @demoCode('select', 'options-array')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Multiple Select">
    <div class="sm:max-w-md">
        <x-label for="multi-demo">Multiple Selectable Options</x-label>
        <x-select name="multi-demo"
                  multiple
                  :options="[
                      '' => 'Select an option',
                      'can' => 'Canada',
                      'usa' => 'United States',
                  ]"
        />
    </div>

    <x-slot name="source">
        @demoCode('select', 'multiple')
    </x-slot>
</x-component-demo-card>
