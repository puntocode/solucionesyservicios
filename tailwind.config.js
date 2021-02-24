module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                steel: {
                    50: '#f2fafc',
                    100: '#dcf8fa',
                    200: '#afeef5',
                    300: '#78dff1',
                    400: '#21c5ff',
                    500: '#13a1e3',
                    600: '#2CB1FF',
                    700: '#1265ab',
                    800: '#134d7d',
                    900: '#113e60',
                },
            },
            height: {
                cover: '40rem'
            }
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}