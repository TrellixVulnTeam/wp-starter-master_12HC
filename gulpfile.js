const { notify } = require('browser-sync');
var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const {parallel, series} = require('gulp');
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');
var reload        = browserSync.reload;

gulp.task('browserSync', function(){
   var files = [
  './js/*.js',
  './**/**.php',
  './**.php',
  './sass/*.scss',
  './sass/**/*.scss',
  './sass/**/**/*.scss',
  ];
   browserSync.init(files, {
      proxy: 'http://localhost:8888/proyectox',
      notify:false
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

gulp.task('watch', gulp.series( gulp.parallel('browserSync', 'sass'), function(){
  
   gulp.watch('sass/**/*.scss', browserSync.reload);
}))