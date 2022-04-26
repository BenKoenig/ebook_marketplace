const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],

    theme: {

        extend: {
            maxWidth: {
                '8xl': '85rem',
            },
            colors: {
                'beige-400': '#ECEBE2',
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('prettier-plugin-tailwindcss')

    ],
};
