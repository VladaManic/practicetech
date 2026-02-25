const { merge } = require('webpack-merge');
const common = require('./webpack.common.js');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');

module.exports = () => {
	return merge(common(), {
		mode: 'production',
		plugins: [
			new MiniCssExtractPlugin({
				filename: '../css/style.min.css',
				chunkFilename: '../css/vendors.min.css',
			}),
			new OptimizeCssAssetsPlugin(),
			new webpack.ProvidePlugin({
				$: 'jquery',
				jQuery: 'jquery',
			}),
		],
	});
};
