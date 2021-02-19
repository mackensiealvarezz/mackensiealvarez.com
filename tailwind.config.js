module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            borderRadius: {
                'overlay': '5% 10%'
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
