/** @type {import("prettier").Config} */
module.exports = {
    plugins: ["prettier-plugin-tailwindcss"],
    tailwindStylesheet: "./src/css/app.css", // <--- IMPORTANT: Path to your main CSS file
    // You can add other Prettier options here, e.g.:
    // semi: false,
    // singleQuote: true,
    // printWidth: 100,
    // tabWidth: 2,
};