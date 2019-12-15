var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();

var input = './css/sass/*.scss';
var output = './css';

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('sass', function() {
  return gulp
      .src(input)
      .pipe(sourcemaps.init())
      .pipe(sass(sassOptions).on('error', sass.logError))
      .pipe(sourcemaps.write())
      .pipe(autoprefixer(autoprefixerOptions))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest(output))
      .pipe(browserSync.stream());
});


gulp.task('serve', gulp.series('sass', function() {
  browserSync.init({
    port: 8116,
    proxy: "http://weave.local/" // <-- change this here.

  });

  gulp.watch("css/sass/**/*.scss", gulp.series('sass'));

  gulp.watch([
    "js/**/*.js",
    "**/*.php"
  ]).on('change', browserSync.reload);
}));



gulp.task('watch', function() {
  return gulp
      .watch(input, gulp.series('sass'))
      .on('change', function(event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
      });
});

gulp.task('default', gulp.parallel('serve'));

gulp.task('prod', function () {
  return gulp
      .src(input)
      .pipe(sass({ outputStyle: 'compressed' }))
      .pipe(autoprefixer(autoprefixerOptions))
      .pipe(gulp.dest(output));
});