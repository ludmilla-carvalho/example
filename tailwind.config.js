const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin')
const Color = require('color')

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        themeVariants: ['dark'],
        customForms: (theme) => ({
            default: {
                'input, textarea': {
                    '&::placeholder': {
                        color: theme('colors.gray.400'),
                    },
                },
            },
        }),
        colors: {
            transparent: 'transparent',
            white: '#ffffff',
            black: '#000000',
            gray: {
                '50': '#f9fafb',
                '100': '#f4f5f7',
                '200': '#e5e7eb',
                '300': '#d5d6d7',
                '400': '#9e9e9e',
                '500': '#707275',
                '600': '#4c4f52',
                '700': '#24262d',
                '800': '#1a1c23',
                '900': '#121317',
            },
            azul: {
                '50': '#E7EBED',
                '100': '#CFD7DC',
                '200': '#B6C3C9',
                '300': '#9EAFB8',
                '400': '#859BA6',
                '500': '#6D8794',
                '600': '#557382',
                '700': '#888686',
                '800': '#244B5F',
                '900': '#0C374D',
            },
            ruby: {
                '50': '#F4E9E9',
                '100': '#EAD4D3',
                '200': '#E0BEBC',
                '300': '#D5A9A6',
                '400': '#CB938F',
                '500': '#C07E79',
                '600': '#B66863',
                '700': '#AB534C',
                '800': '#A13D36',
                '900': '#972820',
            },
            //amarelo
            yellow: {
                '50': '#fdfdea',
                '100': '#fdf6b2',
                '200': '#fce96a',
                '300': '#faca15',
                '400': '#e3a008',
                '500': '#c27803',
                '600': '#9f580a',
                '700': '#8e4b10',
                '800': '#723b13',
                '900': '#E5C54E',
            },
            //verde
            green: {
                '50': '#F4F7F1',
                '100': '#EAF0E3',
                '200': '#E0E9D5',
                '300': '#D6E2C7',
                '400': '#CBDBB9',
                '500': '#C1D3AB',
                '600': '#B7CC9D',
                '700': '#ACC58F',
                '800': '#A2BE82',
                '900': '#98B774',
            },
        },
        extend: {
            maxHeight: {
                '0': '0',
                xl: '36rem',
            },
            // fontFamily: {
            //     sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            // },
        },
    },

    variants: {
        backgroundColor: [
            'hover',
            'focus',
            'active',
            'odd',
            'dark',
            'dark:hover',
            'dark:focus',
            'dark:active',
            'dark:odd',
        ],
        display: ['responsive', 'dark'],
        textColor: [
            'focus-within',
            'hover',
            'active',
            'dark',
            'dark:focus-within',
            'dark:hover',
            'dark:active',
        ],
        placeholderColor: ['focus', 'dark', 'dark:focus'],
        borderColor: ['focus', 'hover', 'dark', 'dark:focus', 'dark:hover'],
        divideColor: ['dark'],
        boxShadow: ['focus', 'dark:focus'],
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('tailwindcss-multi-theme'),
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/ui'),
        plugin(({
            addUtilities,
            e,
            theme,
            variants
        }) => {
            const newUtilities = {}
            Object.entries(theme('colors')).map(([name, value]) => {
                if (name === 'transparent' || name === 'current') return
                const color = value[300] ? value[300] : value
                const hsla = Color(color).alpha(0.45).hsl().string()

                newUtilities[`.shadow-outline-${name}`] = {
                    'box-shadow': `0 0 0 3px ${hsla}`,
                }
            })

            addUtilities(newUtilities, variants('boxShadow'))
        }),
    ],
};
