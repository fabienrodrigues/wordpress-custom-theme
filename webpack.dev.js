const merge = require('webpack-merge');
const commonConfig = require('./webpack.common');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = merge(commonConfig, {
    mode: 'development',
    devtool: 'source-map',
    plugins: [
        new CleanWebpackPlugin(),
    ]
});