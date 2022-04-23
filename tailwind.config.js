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
/*            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },*/
            backgroundImage: {
                'building': "url('../assets/building.png')",
                'pencils': "url('../assets/pencils.jpg')",
                'tablet': "url('../assets/tablet.jpg')",
                'happy_guy': "url('../assets/happy_guy.jpg')",
                'grandcanyon': "url('../assets/grandcanyon.png')",
                'blob': "url('../assets/blob.svg')",
                'hills-mobile': "url('../assets/hills-mobile.svg')",
            },
            maxWidth: {
                '8xl': '85rem',
            },
            colors: {
                'beige-5': '#ecebe2',
                'beige-4': '#f9f8f3',
                'bluu-3': '#f1f6fe',
                'gray-8': '#4A4A4A',
                'gray-5': '#B2B2B2',
                'orange-5': '#FDB383',            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('prettier-plugin-tailwindcss')

    ],
};
