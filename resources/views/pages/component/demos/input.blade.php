<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-label for="basic-usage-demo">Basic Input</x-label>
        <x-input name="basic-usage-demo" />
    </div>

    <x-slot name="source">
        @demoCode('input', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Leading Addon">
    <div class="sm:max-w-md">
        <x-label for="leading-addon-demo">Input with Leading Addon</x-label>
        <x-input name="leading-addon-demo" leading-addon="https://" />
    </div>

    <x-slot name="source">
        @demoCode('input', 'leading-addon')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Inline Addon">
    <div class="sm:max-w-md">
        <x-label for="inline-addon-demo">Input with Inline Addon</x-label>
        <x-input name="inline-addon-demo" inline-addon="https://" inline-addon-padding="pl-16" />
    </div>

    <x-slot name="source">
        @demoCode('input', 'inline-addon')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Leading Icon">
    <div class="sm:max-w-md">
        <x-label for="leading-icon-demo">Input with Leading Icon</x-label>
        <x-input name="leading-icon-demo">
            <x-slot name="leadingIcon">
                <x-heroicon-o-phone />
            </x-slot>
        </x-input>
    </div>

    <x-slot name="source">
        @demoCode('input', 'leading-icon')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Trailing Addon">
    <div class="sm:max-w-md">
        <x-label for="trailing-addon-demo">Input with Trailing Addon</x-label>
        <x-input name="trailing-addon-demo" trailing-addon="USD" />
    </div>

    <x-slot name="source">
        @demoCode('input', 'trailing-addon')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Trailing Icon">
    <div class="sm:max-w-md">
        <x-label for="trailing-icon-demo">Input with Trailing Icon</x-label>
        <x-input name="trailing-icon-demo">
            <x-slot name="trailingIcon">
                <x-heroicon-s-search />
            </x-slot>
        </x-input>
    </div>

    <x-slot name="source">
        @demoCode('input', 'trailing-icon')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Advanced Usage">
    <div class="sm:max-w-md">
        <x-label for="advanced-usage-demo">Advanced Usage of Input</x-label>
        <x-input name="advanced-usage-demo" trailing-addon="USD" placeholder="0.00" type="number" step="any" min="0" max="100">
            <x-slot name="leadingIcon">
                <x-heroicon-o-currency-dollar />
            </x-slot>
        </x-input>
    </div>

    <x-slot name="source">
        @demoCode('input', 'advanced-usage')
    </x-slot>
</x-component-demo-card>
