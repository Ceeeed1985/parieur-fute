const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans], // Utilise Inter pour tout le texte par défaut
        marker: ['"Gloria Hallelujah"', 'cursive'],       // Utilise Gloria Hallelujah pour les titres
      },
      animation: {
        spin360: 'spin360 5s linear infinite',
        fadeIn: 'fadeIn 1s ease-in forwards',
      },
      keyframes: {
        spin360: {
            '0%': { transform: 'rotate(0deg)' },
            '100%': { transform: 'rotate(360deg)' },
        },
        fadeIn: {
            '0%': { opacity: '0' },
            '100%': { opacity: '1' },
        },
      },
      boxShadow:{
        'card-blog': '0px 0px 3px 3px #C0C0C0',
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms")({
      strategy: 'class',
    }),
  ],
}

