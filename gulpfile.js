const gulp = require('gulp');
const gutil = require('gulp-util');

const wait = require('gulp-wait');

const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');

const ftp = require('vinyl-ftp');

gulp.task('styles', function() { //Operacje na stylach
  
  gulp.src('./scss/app.scss')
    .pipe(wait(500))
    .pipe(sourcemaps.init())
    .pipe(sass())
	  .on('error', swallowError)
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cleanCSS({debug: true}, (details) => {
      console.log(`${details.name}: ${details.stats.originalSize}`);
      console.log(`${details.name}: ${details.stats.minifiedSize}`);
    }))
    .pipe(sourcemaps.write('../css'))
    .pipe(gulp.dest('./css'))
});

function swallowError (error) {

	// If you want details of the error in the console
	console.log(error.toString())
  
	this.emit('end')
}

gulp.task('default', ['styles'], function() {
  
  gulp.watch('./scss/**/*.scss', ['styles'])
  
})