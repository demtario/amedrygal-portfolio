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

gulp.task('ftp', function() { //Upload na ftp
  
  var conn = ftp.create( {
        host:     '***REMOVED***',
        user:     '***REMOVED***',
        password: '***REMOVED***',
        parallel: 10,
        log:      gutil.log
    } );
 
    var globs = [
        'img/**',
        'css/**',
        'js/**',
        'templates/**',
        'sites/**',
        '.htaccess',
        'index.php'
    ];
  
  return gulp.src( globs, { base: '.', buffer: false } )
        //.pipe( conn.newer( '/ft.heseya.com/public_html' ) ) // only upload newer files
        .pipe( conn.dest( '/ft.heseya.com/public_html' ) );
})

function swallowError (error) {

	// If you want details of the error in the console
	console.log(error.toString())
  
	this.emit('end')
}

gulp.task('default', ['styles'], function() {
  
  gulp.watch('./scss/**/*.scss', ['styles'])
  
})