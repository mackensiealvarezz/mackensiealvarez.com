module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    darkMode: "class", // or 'media' or 'class'
    theme: {
        extend: {
            borderRadius: {
                overlay: "5% 10%"
            }
        }
    },
    variants: {
        extend: {}
    },
    plugins: []
};
