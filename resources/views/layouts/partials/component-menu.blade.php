<div class="relative max-w-7xl mx-auto grid grid-cols-1">
    <nav class="grid gap-y-10 px-4 py-8 bg-white sm:grid-cols-4 sm:gap-x-8 sm:py-12 sm:px-6 lg:px-8 xl:pr-12">
        <x-flyout-menu-section title="Inputs">
            @foreach (config('docs.inputs', []) as $slug => $label)
                <x-flyout-menu-item :href="route('component', ['component' => $slug])">{{ $label }}</x-flyout-menu-item>
            @endforeach
        </x-flyout-menu-section>

        <x-flyout-menu-section title="Selects">
            @foreach (config('docs.selects', []) as $slug => $label)
                <x-flyout-menu-item :href="route('component', ['component' => $slug])">{{ $label }}</x-flyout-menu-item>
            @endforeach
        </x-flyout-menu-section>

        <x-flyout-menu-section title="Files">
            @foreach (config('docs.files', []) as $slug => $label)
                <x-flyout-menu-item :href="route('component', ['component' => $slug])">{{ $label }}</x-flyout-menu-item>
            @endforeach
        </x-flyout-menu-section>

        <x-flyout-menu-section title="Form">
            @foreach (config('docs.form', []) as $slug => $label)
                <x-flyout-menu-item :href="route('component', ['component' => $slug])">{{ $label }}</x-flyout-menu-item>
            @endforeach
        </x-flyout-menu-section>
    </nav>
</div>
