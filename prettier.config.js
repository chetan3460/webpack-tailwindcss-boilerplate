/** @type {import("prettier").Config} */
module.exports = {
    plugins: ["prettier-plugin-tailwindcss"],

    // This tells the plugin where your main Tailwind file is (use .css or .scss as applicable)
    tailwindStylesheet: "./src/css/app.css",

    // Optional Prettier configurations for consistency:
    semi: true, // add semicolons
    singleQuote: true, // use single quotes instead of double
    printWidth: 999, // max line length
    tabWidth: 2, // number of spaces per tab
    trailingComma: 'es5', // add trailing commas where valid in ES5
    bracketSpacing: true, // add spaces between brackets
};
