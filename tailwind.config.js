const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: "#d9f3f9",
                    200: "#b3e7f3",
                    300: "#8edced",
                    400: "#68d0e7",
                    500: "#42c4e1",
                    600: "#359db4",
                    700: "#287687",
                    800: "#1a4e5a",
                    900: "#0d272d",
                },
                secondary: {
                    100: "#cfd1d4",
                    200: "#a0a3a9",
                    300: "#70747d",
                    400: "#414652",
                    500: "#111827",
                    600: "#0e131f",
                    700: "#0a0e17",
                    800: "#070a10",
                    900: "#030508",
                }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            scale: ['active'],
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
