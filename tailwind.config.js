/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/Forms/Components/**/*.php",
    "./resources/**/*.blade.php",    
  ],
  corePlugins: {
    preflight: false,
  },
  theme: {
    extend: {},
  },
  plugins: [],
}
