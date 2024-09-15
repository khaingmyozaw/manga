/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/views/partials/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'zeembi-blue': "#5946A4",
        'zeembi-black': "#272727",
        'zeembi-gray': "#454545",
        'zeembi-red': "#B9090B"
      }
    },
    screens: {
      'xs': {'max': '639px'},
      'sm': {'min': '640px', 'max': '767px'},
      'md': {'min': '768px', 'max': '1023px'},
      'lg': {'min': '1024px'},
      'xl': {'min': '1280px'},
    }
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

