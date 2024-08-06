import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
                inter: ['inter'],
                heading: ['Montserrat', 'sans-serif'],
              },
            colors:{
                primary:'#FA7A6D',
                secondary: '#2e24ed',
            },

            backgroundImage: {
                'dots': "url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><defs><pattern id=\"dots\" x=\"0\" y=\"0\" width=\"20\" height=\"20\" patternUnits=\"userSpaceOnUse\"><circle cx=\"5\" cy=\"5\" r=\"3\" fill=\"%2313097A\" /></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23dots)\" /></svg>')",
              },


        },
    },

    plugins: [forms, typography],
};
