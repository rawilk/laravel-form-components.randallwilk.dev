const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.php',

            // vendor
            './vendor/rawilk/laravel-form-components/src/**/*.php',
            './vendor/rawilk/laravel-form-components/resources/**/*.php',
            './vendor/rawilk/laravel-form-components/resources/js/*.js',
        ],
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],

    theme: {

        fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            mono: ['Fira Code', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace'],
        },

        extend: {

            colors: {
                // tw default colors
                'blue-gray': colors.blueGray,
                'cool-gray': colors.coolGray,

                // custom
                'fenced': '#2d3748',
                'code-bg': colors.trueGray['100'],
            },

            fontSize: {
                'code': '.75rem',
                'code-lg': '1rem',
            },

            lineHeight: {
                code: '1.9',
            },

            outline: {
                'blue-gray': [`2px dotted ${colors.blueGray['500']}`, '2px'],
            },

        },

    },
};
