const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: "./assets/src/js/index.js",
  output: {
    filename: "main.bundle.js",
    path: path.resolve(__dirname, "assets/dist/js"),
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "../css/main.css",
    }),
  ],
  module: {
    rules: [
      // CSS
      {
        test: /\.(sa|sc|c)ss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },

      // JS
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },

      // Images
      {
        test: /\.(jpg|png|gif|svg)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              outputPath: "../images",
              name: "[name].[ext]",
            },
          },
        ],
      },

      // Fonts
      {
        test: /\.(ttf|eot|woff|woff2)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              outputPath: "../fonts",
              name: "[name].[ext]",
            },
          },
        ],
      },
    ],
  },
};
