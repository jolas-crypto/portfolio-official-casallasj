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
        customPurple: '#240A39',
        customPurpleSection: '#35184D',
      },
    },
  },
  plugins: [],
}

