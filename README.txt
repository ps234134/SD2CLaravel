Git handleiding

- git add .
- git push
- git commit -m "een message"

Installation Tailwind Css Laravel:

https://tailwindcss.com/docs/guides/laravel
1: laravel new myproject
2: cd myproject
3: npm install -D tailwindcss postcss autoprefixer
4: npx tailwindcss init -p
5: add this to the tailwind.config.js file:

 module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

6: add this to the app.css file:
@tailwind base;
@tailwind components;
@tailwind utilities;

7: npm run dev in gitbash or other terminal

8:  @vite('resources/css/app.css') don't forget to add this to the HTML!