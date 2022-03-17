const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
/*            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },*/
            backgroundImage: {
                'building': "url('/assets/building.png')",
                'pencils': "url('../assets/pencils.jpg')",
                'tablet': "url('../assets/tablet.jpg')",
            },
            maxWidth: {
                '8xl': '85rem',
            },
            colors: {
                'beige-5': '#ecebe2', 
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
