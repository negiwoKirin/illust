module.exports = {
  "outputDir": "../public/app",
  "publicPath": "/app",
  "pages": {
    "app": {
      "entry": "src/main.js",
      "template": "templates/base.html",
      "filename": "../../resources/views/spa/app.blade.php"
    }
  },
  "transpileDependencies": [
    "vuetify"
  ]
}