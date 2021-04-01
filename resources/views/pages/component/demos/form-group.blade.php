<x-component-demo-card title="Basic Usage">
    <div class="sm:max-w-md">
        <x-form-group label="First name" name="first_name" input-id="basic-usage-demo">
            <x-input name="first_name"
                     id="basic-usage-demo"
            />
        </x-form-group>
    </div>

    <x-slot name="source">
        @demoCode('form-group', 'basic-usage')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Inline Form Group">
    <div class="sm:max-w-md">
        <x-form-group label="First name" name="first_name" input-id="inline-group-demo" inline>
            <x-input name="first_name"
                     id="inline-group-demo"
            />
        </x-form-group>

        <x-form-group label="Last name" name="last_name" input-id="inline-group-last-name" inline>
            <x-input name="last_name"
                     id="inline-group-last-name"
            />
        </x-form-group>
    </div>

    <x-slot name="source">
        @demoCode('form-group', 'inline-group')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Hint Text">
    <div class="sm:max-w-md">
        <x-form-group label="First name" name="first_name" input-id="hint-demo" optional>
            <x-input name="first_name"
                     id="hint-demo"
            />
        </x-form-group>

        <x-form-group label="Last name" name="last_name" input-id="hint-last-name" inline hint="Last name only">
            <x-input name="last_name"
                     id="hint-last-name"
            />
        </x-form-group>
    </div>

    <x-slot name="source">
        @demoCode('form-group', 'hint')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Help Text">
    <div class="sm:max-w-md">
        <x-form-group label="First name" name="first_name" input-id="help-text-demo" inline>
            <x-input name="first_name"
                     id="help-text-demo"
            />

            <x-slot name="helpText">
                Some <span class="font-semibold">helpful</span> text here.
            </x-slot>
        </x-form-group>
    </div>

    <x-slot name="source">
        @demoCode('form-group', 'help-text')
    </x-slot>
</x-component-demo-card>

<x-component-demo-card title="Error Handling">
    <div class="sm:max-w-md">
        <livewire:form-group-error-handling />
    </div>

    <x-slot name="source">
        @demoCode('form-group', 'help-text')
    </x-slot>
</x-component-demo-card>
