/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        font1: '#ffffff',
        font2: '#2F1C19',
        font3: '#000000',
        font4: '#9ca3af',
      },
      backgroundColor: theme => ({
        ...theme('color'),
        primary: '#B99470',
        secondary: '#ffffff',
        tertiary: '#2F1C19',
        kuarterner: '#000000'
      }),
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        koulen: ['Koulen', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')({
      charts: true,
    }),
  ],
}

