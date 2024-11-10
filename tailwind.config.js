/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',

    ],

    darkMode: 'media', // or 'media' or 'class'

    theme: {
        extend: {},
    },
    plugins: [
        require('preline/plugin'),

    ],
}