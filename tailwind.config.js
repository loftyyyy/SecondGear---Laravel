import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                encode: ['"Encode Sans Expanded"', 'sans-serif'],
                future: ["'Future Forces'", "sans-serif"],
                exo: ["'Exo 3'", "sans-serif"],
            },
        },
    },

    plugins: [forms],
};
