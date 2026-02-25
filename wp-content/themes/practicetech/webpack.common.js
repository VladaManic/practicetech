const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const autoprefixer = require('autoprefixer');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const dotenv = require('dotenv').config({
	path: path.join(__dirname, '.env'),
});

module.exports = () => {
	const themeName = process.env.THEME_NAME;

	return {
		entry: {
			script: './assets/js/index.js',
		},
		module: {
			rules: [
				{
					test: /\.(scss|css)$/,
					use: [
						MiniCssExtractPlugin.loader,
						{ loader: 'css-loader', options: { sourceMap: true } },
						{
							loader: 'postcss-loader',
							options: {
								plugins: () => [autoprefixer],
								sourceMap: true,
							},
						},
						{ loader: 'sass-loader', options: { sourceMap: true } },
					],
				},
				{
					test: /\.js$/,
					exclude: /node_modules/,
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-env'],
						sourceMap: true,
					},
				},
				{
					test: /\.(woff(2)?|ttf|eot|svg|jpg)(\?v=\d+\.\d+\.\d+)?$/,
					use: [
						{
							loader: 'file-loader',
							options: {
								name: '[name].[ext]',
								publicPath: `/wp-content/themes/${themeName}/assets/img`,
							},
						},
					],
				},
			],
		},
		optimization: {
			splitChunks: {
				chunks: 'all',
			},
		},
		plugins: [
			new CleanWebpackPlugin(),
			new webpack.DefinePlugin({
				'process.env': dotenv.parsed,
			}),
		],
		output: {
			filename: '[name].min.js',
			path: path.resolve(__dirname, 'public/js'),
			chunkFilename: 'vendors.min.js',
			publicPath: 'http://localhost:8080/',
		},
	};
};
