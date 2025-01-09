/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    
    extend: {
      fontFamily: {
        poppins: ['"Poppins", sans-serif'],
      },
      keyframes: {
        borderFade: {
          '0%': { transform: 'scale(1)', opacity: '1' },
          '100%': { transform: 'scale(1.1)', opacity: '0' },
        }
      },
      animation: {
        borderFade: 'borderFade 1.5s linear infinite',
      }
    },
  },
  plugins: [],
}