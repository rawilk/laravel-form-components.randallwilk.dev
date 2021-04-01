<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Textarea</x-label>
        <x-textarea name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('textarea', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Custom Attributes">
    <div class="sm:max-w-md">
        <x-label for="customAttrsDemo">Textarea with Custom Attributes</x-label>
        <x-textarea name="custom-attrs-demo" id="customAttrsDemo" rows="5" placeholder="This textearea is rendered with 5 rows" />
    </div>

    <x-slot name="source">
        @demoCode('textarea', 'custom-attributes')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Set Value">
    <div class="sm:max-w-md">
        <x-label for="preset-value-demo">Textarea with Pre-set Value</x-label>
        <x-textarea name="preset-value-demo" value="My preset value" />
    </div>

    <x-slot name="source">
        @demoCode('textarea', 'preset-value')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="With Leading Addon">
    <div class="sm:max-w-md">
        <x-label for="leading-addon-demo">Textarea with Leading Addon</x-label>
        <x-textarea name="leading-addon-demo">
            <x-slot name="leadingAddon">
                <span class="w-5 h-5">
                    <x-heroicon-o-location-marker />
                </span>
            </x-slot>
        </x-textarea>
    </div>

    <x-slot name="source">
        @demoCode('textarea', 'leading-addon')
    </x-slot>
</x-component-demo-card>
