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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '2xl': '672px',
                '3xl': '768px',
                '4xl': '896px',
                '5xl': '1024px',
                '6xl': '1152px',
                '7xl': '1280px',
            },
        },
    },

    plugins: [
        forms,
        typography,
        require('@tailwindcss/aspect-ratio'),
        require('flowbite/plugin')({
            charts: true,
            datatables: true,
            wysiwyg: true,
        })
    ],
};
