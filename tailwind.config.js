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
                mont: ['Montserrat, helvetica'],
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
                'desktop': {'max': '1280px'},
                // => @media (max-width: 1280px) { ... }

                'xl': {'max': '1279px'},
                // => @media (max-width: 1279px) { ... }

                'laptop': {'max': '1024px'},
                // => @media (max-width: 1024px) { ... }

                'lg': {'max': '1023px'},
                // => @media (max-width: 1023px) { ... }

                'tablet': {'max': '768px'},
                // => @media (max-width: 768px) { ... }

                'md': {'max': '767px'},
                // => @media (max-width: 767px) { ... }

                'phone': {'max': '600px'},
                // => @media (max-width: 601px) { ... }

                'sm': {'max': '599px'},
                // => @media (max-width: 639px) { ... }

                's-phone': {'max': '500px'},
                // => @media (max-width: 601px) { ... }

                'xs': {'max': '499px'},
                // => @media (max-width: 499px) { ... }

                'mini': {'max': '380px'},
                // => @media (max-width: 380px) { ... }

                'fold': {'max': '320px'}
            },

            animation: {
                'slidein': 'slidein 1s',
                'slidein2': 'slidein2 1s'
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    
};
