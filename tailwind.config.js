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
<<<<<<< HEAD
                exo: ["'Exo 3'", "sans-serif"]
=======
                exo: ["Exo 3", "sans-serif"],
>>>>>>> b211cde343aa28f36ab279d99a49ab02dc09a8ab
            },
        },
    },

    plugins: [forms,
    ],
};
