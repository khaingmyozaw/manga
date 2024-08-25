/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'zeembi-red': "#B9090B",
        'zeembi-blue': "#5946A4",
      }
    },
  },
  plugins: [],
}

