module.exports = withMT({
    content: [
        "./resources/**/*.{blade.php,php,html,js,jsx,ts,tsx}",
        "./src/**/*.{js,jsx,ts,tsx,php}"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
});