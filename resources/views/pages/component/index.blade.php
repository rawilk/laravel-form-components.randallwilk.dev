<x-page :title="$pageTitle">
    @include('pages.component.partials.header')

    <div class="relative py-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6" id="demo-content">
            @includeIf("pages.component.demos.{$componentName}")
        </div>
    </div>
</x-page>
