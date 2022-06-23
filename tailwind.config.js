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
            backgroundImage: {
                'pattern': "url('../assets/bg/pattern.svg')",
                'blur': "url('../assets/bg/blur.png')",
            },
            maxWidth: {
                '8xl': '85rem',
            },
            colors: {
                'beige-400': '#f4f3ee',
                'beige-600': '#e0dfd3',
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('prettier-plugin-tailwindcss')

    ],
};
