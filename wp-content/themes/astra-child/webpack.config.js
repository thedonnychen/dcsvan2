const Path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const Webpack = require("webpack");

module.exports = {
  entry: {
    frontend: "./src/js/index.js"
  },
  output: {
    path: Path.resolve(__dirname, "dist"),
    filename: "[name].bundle.min.js"
  },
  optimization: {
    minimizer: [
      new UglifyJsPlugin({
        cache: true,
        parallel: true,
        sourceMap: true // set to true if you want JS source maps
      }),
      new OptimizeCSSAssetsPlugin({})
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].bundle.min.css"
    })
  ],
  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: [
          MiniCssExtractPlugin.loader,
          //   {
          //     loader: "style-loader" // inject CSS to page
          //   },
          {
            loader: "css-loader", // translates CSS into CommonJS modules
            options: { url: false, sourceMap: false }
          },
          {
            loader: "postcss-loader", // Run post css actions
            options: {
              plugins: function() {
                // post css plugins, can be exported to postcss.config.js
                return [require("precss"), require("autoprefixer")];
              }
            }
          },
          {
            loader: "sass-loader", // compiles Sass to CSS
            options: { sourceMap: false }
          }
        ]
      }
    ]
  }
};
