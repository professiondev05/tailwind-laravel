/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    content: [
        // "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            padding: { default: "0rem", lg: "3rem" },
        },
        fontFamily: {
            serif: ["PT Serif", "Arial", "sans-serif"],
            inter: ["Arial", "sans-serif"],
            // inter: ["'Space Mono'", "Arial", "sans-serif"],
        },
        fontSize: {
            title1: ["72px", "94px"],
            title2: ["60px", "80px"],
            title3: ["48px", "64px"],
            title4: ["36px", "48px"],
            title5: ["30px", "40px"],
            title6: ["24px", "32px"],
            subtitle: ["20px", "28px"],
            subtitle2: ["18px", "24px"],
            body: ["16px", "20px"],
            body2: ["14px", "20px"],
            button: ["16px", "24px"],
            button2: ["14px", "20px"],
            caption: ["12px", "16px"],
            caption2: ["12px", "16px"],
            overline: [
                "16px",
                {
                    lineHeight: "20px",
                    letterSpacing: "2px",
                    fontWeight: "500",
                },
            ],
            overline2: [
                "12px",
                {
                    lineHeight: "16px",
                    letterSpacing: "2px",
                    fontWeight: "500",
                },
            ],
        },
        extend: {
            colors: {
                primary: "#7F2B28",
                primaryBeta: "#5B1C1A",
                primaryGamma: "#34100F",
                secondary: "#CC9A7D",
                secondaryBeta: "#9E6E52",
                secondaryGamma: "#7C5640",
                tertiary: "#3A4838",
                tertiaryBeta: "#3E4A3C",
                tertiaryGamma: "#262D25",
                error: "#B73A2C",
                success: "#508248",
                dark: "#2B0B0B",
                medium: "#746969",
                light: "#FEF9F8",
                extra: "#FFEBE9",
                background: "#EFDFD5",
                backgroundBeta: "#D8E0D5",
                backgroundGamma: "#FFFFFF",
                overlay: "#2b0b0b99",
                overlayBeta: "#2b0b0b1a",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/container-queries"),
        // ...
    ],
};
