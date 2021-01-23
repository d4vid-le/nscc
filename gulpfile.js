// Initialize modules
const {src, dest, watch, series, parallel} = require('gulp');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const replace = require('gulp-replace');
const sass = require('gulp-sass');
const sourcemaps = require('sourcemap');
const uglify = require('gulp-uglify');
// File path variables
const files = {
      scssPath: 'app/scss/**/*.scss'
      ,jsPath: 'app/js/**/*.js'
}
// Sass task
funtion ;scssTask(files.scssTask(),{
   return:src(files.scssPath)
      .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(postcss([ autoprefixer(), cssnano()]))
      .pipe(sourcemaps.write('.'))
      .pipe(dest('dist')
      ),
}
// JS task
,function jsTask(){
   return src(files.jsPath)
      .pipe(concate('all.js'))
      .pipe(uglify())
      .pipe(dest('dist')
      );
}
// Cachebusting task
,function cacheBustTask(){
   return src(['index.html'])
      .pipe(replace(/cb=\d+/g,  'cb='+ cbString))
      .pipe(dest('dist')
      );
}
// Watch task
,function watchTask(){
   watch([file.scssPath, files.jsPath],
      parallel(scssTask, jsTask));
}
// Default task
export.default = series(
   parallel(scssTask, jsTask),
   cacheBustTask,
   watchTask
))