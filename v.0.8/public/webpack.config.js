const path = require('path');
console.log(__dirname);
module.exports = {

  entry: {
    // app: './src/js/app.js',
    admin: './src/js/admin.js',
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, './admin/js')
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        loader: 'babel-loader',
        options: {
          presets: ['es2017'],
        }
      }
    ]
  }

};