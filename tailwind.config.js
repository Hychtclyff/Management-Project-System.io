/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                login: "url('/public/img/loginbg.jpg')",
            },
        },
    },
    plugins: ["@tailwindcss/forms"],
};
