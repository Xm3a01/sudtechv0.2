const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
     plugins: [require('@tailwindcss/custom-forms'),],

    theme: {
        extend: {
            spacing: {
                128: '32rem',
            },
            
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
