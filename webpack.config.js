const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const TerserPlugin = require("terser-webpack-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const CompressionPlugin = require("compression-webpack-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const version = require("./config/version.json");
const glob = require("glob");

module.exports = function (env, argv) {
    const devMode = argv.mode === 'development';

    let mods = {
        watch: devMode,
        // devtool: devMode ? 'source-map' : false,
        devtool: devMode ? 'source-map' : 'cheap-module-source-map',

        entry: {
            app: ['./src/js/app.js', './src/css/app.css'],
        },
        output: {
            path: path.resolve(__dirname, 'dist'),
            filename: `js/[name]-${version.version}.min.js`,
            assetModuleFilename: 'fonts/[name][ext]',
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env'],
                            plugins: ['@babel/plugin-syntax-dynamic-import']
                        }
                    },
                },
                {
                    test: /\.s?css$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        {
                            loader: "css-loader",
                            options: { url: false },
                        },
                        "postcss-loader",
                        "sass-loader"
                    ],
                },
                {
                    test: /\.(woff(2)?|ttf|eot|otf)$/,
                    type: 'asset/resource',
                    generator: {
                        filename: 'fonts/[name][ext]',
                    },
                },
            ],
        },
        plugins: [
            new RemoveEmptyScriptsPlugin(),
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
            }),
            new MiniCssExtractPlugin({
                filename: 'css/[name].min.css',
            }),
            new CleanWebpackPlugin(),
            new BrowserSyncPlugin({
                proxy: "http://localhost/webpack-tailwindcss-boilerplate/", // ← change to your PHP local server path
                files: [
                    "dist/css/*.css",
                    "dist/js/*.js",
                    "**/*.php",
                    "src/scss/**/*.scss" // 👈 ADD THIS
                ],
                port: 3000,
                serveStatic: [{
                    route: "dist",
                    dir: "dist"
                }],
                injectChanges: true,
                notify: false,
                // open: false,
            }, {
                reload: true
            }),
        ],

    };
    if (!devMode) {
        mods = {
            ...mods,
            plugins: [
                ...mods.plugins,
                new CompressionPlugin() // GZ compression
            ],
            optimization: {
                minimize: true,
                minimizer: [
                    new TerserPlugin(),
                    new CssMinimizerPlugin()
                ],
                concatenateModules: true,
            }
        };
    }

    return mods;
};
