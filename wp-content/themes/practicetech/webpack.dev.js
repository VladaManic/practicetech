const { merge } = require('webpack-merge');
const common = require('./webpack.common.js');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const OpenBrowserPlugin = require('open-browser-webpack-plugin');
const WriteFilePlugin = require('write-file-webpack-plugin');

module.exports = () => {
	return merge(common(), {
		mode: 'development',
		devtool: 'inline-source-map',
		devServer: {
			hot: true,
			host: 'localhost',
			port: 8080,
			clientLogLevel: 'none',
			disableHostCheck: true,
			headers: {
				'Access-Control-Allow-Origin': '*',
				'Access-Control-Allow-Headers':
					'Origin, X-Requested-With, Content-Type, Accept',
			},
		},
		plugins: [
			new MiniCssExtractPlugin({
				filename: '../css/style.min.css',
				chunkFilename: '../css/vendors.min.css',
			}),
			new webpack.HotModuleReplacementPlugin(),
			new WriteFilePlugin(),
			new webpack.ProvidePlugin({
				$: 'jquery',
				jQuery: 'jquery',
			}),
			new BrowserSyncPlugin(
				{
					proxy: process.env.URL,
					port: 3000,
					ui: false,
					open: false,
					files: ['**/*.php'],
					ghostMode: {
						clicks: false,
						location: false,
						forms: false,
						scroll: false,
					},
					snippetOptions: { ignorePaths: 'wp-admin/**' },
					reloadDelay: 0,
				},
				{ reload: false }
			),
			new OpenBrowserPlugin({ url: process.env.URL }),
		],
	});
};
