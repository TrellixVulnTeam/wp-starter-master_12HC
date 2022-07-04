var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const {series, parallel} = require('gulp');
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');
var reload        = browserSync.reload;

gulp.task('browserSync', function(){
   browserSync.init({
      proxy: 'http://localhost:8888/proyectox'
   })
})

gulp.task('sass', function(){
   return gulp.src('sass/**/*.scss')
   .pipe(sourcemaps.init())
   .pipe(sass())
   .pipe(sourcemaps.write('.'))
   .pipe(gulp.dest('.'))
   .pipe(browserSync.reload({
      stream:true
   }))
})

gulp.task('watch', gulp.parallel('browserSync', 'sass', function(){
   gulp.watch('sass/**/*.scss', sass);
   gulp.watch('sass/**/*.scss', browserSync.reload);
}))