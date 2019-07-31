var gulp = require('gulp')
    sass = require('gulp-sass')
    mediaGroup= require('gulp-group-css-media-queries')
   // cleanCSS = require('gulp-clean-css');

;


gulp.task('sass', function() {
    return gulp.src(['assets/scss/style.scss'])
        .pipe(sass({outputStyle:'expanded'}).on('error',sass.logError))
        .pipe(mediaGroup())
        // .pipe(cleanCSS())
        .pipe(gulp.dest('./'))
});
gulp.task('watch', function() {
    gulp.watch([
        'assets/scss/_base/*.scss',
        'assets/scss/_modules/*.scss',
        'assets/scss/_sections/*.scss',
        'assets/scss/_pages/*.scss'
    ],gulp.series('sass'))
});

//