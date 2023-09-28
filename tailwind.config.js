/** @type {import('tailwindcss').Config} */
export default {
    daisyui: {
        themes: ["light"],
    },

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("daisyui"),
        require("@tailwindcss/forms"),
    ],
};
