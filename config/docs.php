<?php

return [
    'url' => 'https://randallwilk.dev/docs/laravel-form-components',

    /*
     * This is used when generating urls to each component's doc url.
     */
    'current_version' => 'v4',

    'inputs' => [
        'input' => 'Input',
        'password' => 'Password',
        'textarea' => 'Textarea',
        'checkbox' => 'Checkbox',
        'radio' => 'Radio',
        'date-picker' => 'Date Picker',
        'switch-toggle' => 'Switch Toggle',
    ],

    'selects' => [
        'select' => 'Select',
        'custom-select' => 'Custom Select',
        'timezone-select' => 'Timezone Select',
    ],

    'files' => [
        'file-upload' => 'File Upload',
        'filepond' => 'FilePond',
    ],

    'form' => [
        'form-group' => 'Form Group',
    ],

    'mobile_nav' => [
        'input' => 'Input',
        'select' => 'Select',
        'form-group' => 'Form Group',
        'textarea' => 'Textarea',
    ],

    'demos' => [
        'input' => [
            'page_title' => 'Input',
            'intro' => 'The input component offers an easy way to set up any type of input field for your forms.',
        ],
        'password' => [
            'page_title' => 'Password',
            'intro' => 'The password component offers an easy way to set up a password input field for your forms.',
        ],
        'textarea' => [
            'page_title' => 'Textarea',
            'intro' => 'The textarea component offers an easy way to set up a textarea field for your forms.',
        ],
        'checkbox' => [
            'page_title' => 'Checkbox',
            'intro' => 'The checkbox component offers an easy way to set up a checkbox input field in your forms.',
        ],
        'radio' => [
            'page_title' => 'Radio',
            'intro' => 'The radio component offers an easy way to set up a radio button input field in your forms.',
        ],
        'date-picker' => [
            'page_title' => 'Date Picker',
            'intro' => 'The date picker component offers an integration with the flatpickr datepicker library.',
        ],
        'switch-toggle' => [
            'page_title' => 'Switch Toggle',
            'intro' => 'The switch toggle component offers an alternative to a traditional checkbox and is heavily based on the Tailwind UI toggle component.',
        ],
        'select' => [
            'page_title' => 'Select',
            'intro' => 'The select component offers an easy way to provide select menus in your forms.',
        ],
        'custom-select' => [
            'page_title' => 'Custom Select',
            'intro' => "Heavily based on Tailwind UI's custom selects, the custom select component provides a nice alternative to the native select menu.",
        ],
        'timezone-select' => [
            'page_title' => 'Timezone Select',
            'intro' => 'The timezone select component offers an easy way to render timezones in a select menu.',
        ],
        'form-group' => [
            'page_title' => 'Form Group',
            'intro' =>  'The form group component can be used to encapsulate an input in order to render a label and error messages automatically for you.',
        ],
        'file-upload' => [
            'page_title' => 'File Upload',
            'intro' => 'The file upload component provides a custom file input for your forms.',
        ],
        'filepond' => [
            'page_title' => 'FilePond',
            'intro' => 'The FilePond component provides an easy way to utilize advanced file uploads via FilePond.',
        ],
    ],

    /*
     * These "features" are shown on the home page.
     */
    'feature_list' => [

        'input' => [
            'name' => 'Input',
            'about' => 'The basic but very versatile input element.',
            'docs' => 'inputs/input',
        ],

        'email' => [
            'name' => 'Email',
            'about' => 'An input element configured for handling email addresses.',
            'docs' => 'inputs/email',
        ],

        'password' => [
            'name' => 'Password',
            'about' => 'A password input element that comes with a toggle button for showing/hiding the entered password.',
            'docs' => 'inputs/password',
        ],

        'textarea' => [
            'name' => 'Textarea',
            'about' => 'A basic textarea input element.',
            'docs' => 'inputs/textarea',
        ],

        'checkbox' => [
            'name' => 'Checkbox',
            'about' => 'A basic checkbox input element.',
            'docs' => 'inputs/checkbox',
        ],

        'radio' => [
            'name' => 'Radio Button',
            'about' => 'A basic radio button element.',
            'docs' => 'inputs/radio',
        ],

        'checkbox-group' => [
            'name' => 'Checkbox Group',
            'about' => 'Useful for grouping checkboxes or radio buttons together.',
            'docs' => 'inputs/checkbox-group',
        ],

        'date-picker' => [
            'name' => 'Date Picker',
            'about' => 'A specialized date picker that uses Flatpickr behind-the-scenes.',
            'docs' => 'inputs/date-picker',
        ],

        'switch-toggle' => [
            'name' => 'Switch Toggle',
            'about' => 'A custom, specialized checkbox input element.',
            'docs' => 'inputs/switch-toggle',
        ],

        'select' => [
            'name' => 'Select',
            'about' => 'A basic select dropdown menu element.',
            'docs' => 'selects/select',
        ],

        'custom-select' => [
            'name' => 'Custom Select',
            'about' => 'A more customized and powerful select menu dropdown element.',
            'docs' => 'selects/custom-select',
        ],

        'timezone-select' => [
            'name' => 'Timezone Select',
            'about' => 'A specialized select menu dropdown with timezones as options.',
            'docs' => 'selects/timezone-select',
        ],

        'file-upload' => [
            'name' => 'File Upload',
            'about' => 'A custom file input element with support for showing file upload progress.',
            'docs' => 'files/file-upload',
        ],

        'filepond' => [
            'name' => 'FilePond',
            'about' => 'Add a dropzone-like file input utilizing the FilePond library.',
            'docs' => 'files/filepond',
        ],

        'form' => [
            'name' => 'Form',
            'about' => 'Form element that takes care of certain necessities such as adding a hidden csrf-token.',
            'docs' => 'form/form',
        ],

        'label' => [
            'name' => 'Label',
            'about' => 'A basic label element.',
            'docs' => 'form/label',
        ],

        'form-error' => [
            'name' => 'Form Error',
            'about' => 'Keep track of and show errors for an input automatically.',
            'docs' => 'form/form-error',
        ],

        'form-group' => [
            'name' => 'Form Group',
            'about' => 'Specialized element to provide a label and error handling for each input element.',
            'docs' => 'form/form-group',
        ],

    ],
];
