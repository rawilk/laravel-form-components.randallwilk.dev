```html
<x-timezone-select name="excluded-regions-demo"
                   use-custom-select
                   :only="[
                       \Rawilk\FormComponents\Support\TimeZoneRegion::EUROPE,
                       \Rawilk\FormComponents\Support\TimeZoneRegion::AMERICA
                   ]"
/>
```
