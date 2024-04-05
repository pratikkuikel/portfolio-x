/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {},
    },
    // plugins: [require("rippleui")],
    plugins: [require("@tailwindcss/typography"), require("daisyui")],
};
