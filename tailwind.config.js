/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                platypi: ["Platypi"],
                quicksand: ["Quicksand"],
            },
        },
    },
    plugins: [],
};
