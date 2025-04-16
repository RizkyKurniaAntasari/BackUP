/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/js/**/*.js",
    ],
    theme: {
      extend: {
        fontFamily: {
          poppins: ['Poppins', 'sans-serif'],
        }
      },
    },
    plugins: [],
  }
  