import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        'therifleman': ['TheRifleman', 'sans-serif'], // Add the TheRifleman font family
      },
      colors: {
        primary: "#652b53",
        "primary-100": "#5E294D",
        "primary-200": "#542445",
        "primary-low": "#6e4d63",
        secondary: "#f7e5c8",
        "secondary-100": "#fce6c2",
        "secondary-200": "#fce0b4",
        tertiary: "#f2aada"
      }
    },
  },
  plugins: [forms],
}
