const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
    entry: './resources/js/index.js', // Entry point
    output: {
        filename: 'main.js', // Output file
        path: path.resolve(__dirname, 'public/assets/js'), // Output directory
    },
    mode: 'development', // Mode: 'development' or 'production'
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader',
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../css/style.css',
        }),
    ],
    devtool: 'source-map',
};