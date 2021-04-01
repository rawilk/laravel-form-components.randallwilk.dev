```html
<x-form-group label="First name" 
              name="first_name"
              input-id="help-text-demo"
              inline
>
    <x-input name="first_name"
             id="help-text-demo"
    />

    <x-slot name="helpText">
        Some <span class="font-semibold">helpful</span> text here.
    </x-slot>
</x-form-group>
```
