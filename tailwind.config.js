import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            textShadow: {
                sm: '1px 1px 2px var(--tw-shadow-color)',
                DEFAULT: '2px 2px 4px var(--tw-shadow-color)',
                lg: '4px 4px 8px var(--tw-shadow-color)',
                xl: '4px 4px 16px var(--tw-shadow-color)',
            },
        },
    },

    plugins: [plugin(function ({ matchUtilities, theme }) {
        matchUtilities(
          {
            'text-shadow': (value) => ({
              textShadow: value,
            }),
          },
          { values: theme('textShadow') }
        )
      }),
        forms,
        require("daisyui"),
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],

    daisyui: {
        themes: [],
      },

    //   corePlugins: {
    //     preflight: false,
    //   }

};
