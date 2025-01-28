const plugin = require('tailwindcss/plugin');

module.exports = {
    theme: {
        extend: {
            colors: {
                'base500': 'var(--base-gray-500)',
                'main-text': 'var(--main-text-color)',
                'purple': 'var(--purple)',
            }
        }
    },
    plugins: [
        plugin(function ({ addBase, theme }) {
            addBase({
                'body': {
                    'background-color': theme('colors.main-bg'),
                    'color': theme('colors.main-text'),
                },
            });
        })
    ],
}