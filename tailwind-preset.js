const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.php',

        // vendor
        './vendor/rawilk/laravel-form-components/resources/js/*.js',
        './vendor/rawilk/laravel-form-components/src/**/*.php',
        './vendor/rawilk/laravel-form-components/resources/**/*.php',
    ],

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],

    theme: {
        extend: {
            colors: {
                slate: colors.slate,
                gray: colors.gray,
                rose: colors.rose,
                orange: colors.orange,
                indigo: colors.indigo,
                pink: colors.pink,
                yellow: colors.yellow,
            },

            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
};
