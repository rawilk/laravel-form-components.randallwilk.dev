```html
<x-custom-select name="optional-demo"
                 :options="\App\Models\Role::get()"
                 value-field="id"
                 text-field="name"
                 optional
/>
```
