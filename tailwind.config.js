/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./app/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "primary": "#E2DFDE",
            },
        },
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
            roboto: ["Roboto", "sans-serif"],
            heebo: ["Heebo", "sans-serif"],
            ibm: ["IBM Plex Sans", "sans-serif"],
        },
        colors: {
            primarys: "#E2DFDE",
            secondarys: "#EFEEEE"
        }
    },
    plugins: [require("flowbite/plugin"),],
};