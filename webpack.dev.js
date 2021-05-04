const { merge } = require("webpack-merge");
const common = require("./webpack.common");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = merge(common, {
  mode: "development",
  devtool: "inline-source-map",
  watch: true,
  plugins: [
    new BrowserSyncPlugin({
      files: "**/*.php",
      proxy: "http://localhost:8888/",
    }),
  ],
});
