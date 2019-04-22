var gulp = require('gulp')
    sass = require('gulp-sass')
    mediaGroup= require('gulp-group-css-media-queries')
   // cleanCSS = require('gulp-clean-css');

;


gulp.task('sass', function() {
    return gulp.src(['scss/style.scss'])
        .pipe(sass({outputStyle:'expanded'}).on('error',sass.logError))
        .pipe(mediaGroup())
        // .pipe(cleanCSS())
        .pipe(gulp.dest('./'))
});
gulp.task('watch', function() {
    gulp.watch([
        'scss/_base/*.scss',
        'scss/_modules/*.scss'
    ],gulp.series('sass'))
});

