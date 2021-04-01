```html
<x-custom-select name="model-options-demo"
                 :options="\App\Models\Role::get()"
                 value-field="id"
                 text-field="name"
/>
```
