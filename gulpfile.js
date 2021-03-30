//modules
const gulp = require("gulp"),
  sass = require("gulp-sass"),
  autoprefixer = require("gulp-autoprefixer"),
  plumber = require("gulp-plumber"),
  concat = require("gulp-concat"),
  uglify = require("gulp-uglify"),
  notify = require("gulp-notify");

//path
const sourcePath = "./wp-content/themes/custom/sources",
  assetPath = "./wp-content/themes/custom";

//js libraries and plugins
const jsLibs = [];

function style() {
  return gulp
    .src(sourcePath + "/scss/style.scss")
    .pipe(plumber())
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .on("error", sass.logError)
    .pipe(
      autoprefixer({
        remove: false,
        overrideBrowsersList: ["last 3 versions"],
      })
    )
    .pipe(gulp.dest(assetPath));
}

exports.default = style;
