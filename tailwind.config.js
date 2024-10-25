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
      animation:{
        spin360: 'spin360 5s linear infinite',
      },
      keyframes:{
        spin360:{
          '0%':{transform: 'rotate(0deg)'},
          '100%':{transform: 'rotate(360deg)'},
        },
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms")({
      strategy: 'class',
    }),
  ],
}

