/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./../app/views/**/*.{php, html}'],
  theme: {
    extend: {
      colors:
      {
        'primary': '#14b8a6',
        'secondary': '#475569',
        'dark': '#646464',
      }
    },
  },
  plugins: [],
}
