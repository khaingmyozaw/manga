/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'zeembi-red': "#B9090B",
        'zeembi-blue': "#5946A4",
        'zeembi-black': "#272727",
        'zeembi-gray': "#454545"
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

