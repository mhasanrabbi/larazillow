/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './storage/frameworks/views/*.php',
    './resources/css/**/*/blade.php',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
