```html
<x-custom-select name="multiple-demo"
                 :options="\App\Models\Role::get()"
                 value-field="id"
                 text-field="name"
                 optional
                 multiple
/>
```
