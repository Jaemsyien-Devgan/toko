/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js'
  ],
  darkMode: 'class',
  theme: {
    extend: {
        backgroundImage: {
            'landing_page': "url('/images/landing_page.png')",
          }
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}

