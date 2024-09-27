/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",
                black: "#000000",
                white: "#ffffff",
                purple: "#3f3cbb",
                midnight: "#121063",
                metal: "#565584",
                tahiti: "#3ab7bf",
                silver: "#ecebff",
                bubblegum: "#ff77e9",
                bermuda: "#78dcca",
                greenhmif: "#185519",
                orangeelection: "#E8B86D",
                whitekandidat: "#F5F7F8",
                kandidat1: "#FCDE70",
                greenfooter: "#475647",
                greenform: "#185519",
            },
            dropShadow: {
                drop: "0px 4px 4px rgba(0,0,0,0.25)",
            },
        },
        fontFamily: {
            garamond: ["Cormorant Garamond", "sans-serif"],
            libre: ["Proza Libre", "sans-serif"],
        },
    },
    plugins: [],
};
