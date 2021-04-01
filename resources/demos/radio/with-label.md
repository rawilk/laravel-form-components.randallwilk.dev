```html
<x-radio name="with-label-demo"
            label="Remember me" 
/>

<div class="mt-2">
    <div class="relative my-4">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-gray-50 text-gray-500">
                Or via default slot
            </span>
        </div>
    </div>
    <x-radio name="with-label-demo-slotted">
        Label rendered via default slot
    </x-radio>
</div>
```
