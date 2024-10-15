/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      maxWidth: {
        '53': '53%', // 53% সর্বাধিক প্রস্থ
        '23': '23%', // 23% সর্বাধিক প্রস্থ
      },
    },
  },
  plugins: [],
}