const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors : {
                primary: '#3d75f2',
                secondary: '#dfe7f8',
                environmental: '#598dff',
                complementary: '#f2bc3d',
                shadeWhite: '#f2f2f0',
                darken: '#323a4d',
                shadeDark: '#363636'
            },

            screens: {
                'xl': {'max': '1279px'},
                // => @media (max-width: 1279px) { ... }
          
                'lg': {'max': '1023px'},
                // => @media (max-width: 1023px) { ... }
          
                'md': {'max': '767px'},
                // => @media (max-width: 767px) { ... }
          
                'sm': {'max': '639px'},
                // => @media (max-width: 639px) { ... }
            },

            keyframes: {
                wiggle: {
                  'from': { width: 'rotate(-3deg)' },
                  'to': { transform: 'rotate(3deg)' },
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
