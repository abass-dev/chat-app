let path = require("path");
let webpack = require("webpack");
module.exports = {
  mode: "development",
  entry: [
    path.join(__dirname, "assets/main.js")
    ],
    output: {
     path: path.join(__dirname, "public/build"),
     filename: "bundle.js"
    }
}