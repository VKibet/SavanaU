import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Outfit', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                nature: {
                    300: '#6ee7b7', // soft mint
                    400: '#34d399', // bright emerald
                    500: '#10b981', // emerald
                    800: '#065f46', // deep forest
                    900: '#064e3b', // midnight forest
                    950: '#022c22', // extra dark
                },
                earth: {
                    400: '#fbbf24', // golden sun
                    500: '#f59e0b', // amber
                }
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                'float': 'float 6s ease-in-out infinite',
                'glow': 'glow 3s ease-in-out infinite alternate',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: 0, transform: 'translateY(30px)' },
                    '100%': { opacity: 1, transform: 'translateY(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                glow: {
                    '0%': { boxShadow: '0 0 10px rgba(16, 185, 129, 0.2)' },
                    '100%': { boxShadow: '0 0 25px rgba(16, 185, 129, 0.6)' },
                }
            }
        },
    },

    plugins: [forms],
};
