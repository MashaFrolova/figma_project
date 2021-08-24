const gulp        = require('gulp');
const browserSync = require('browser-sync');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const rename = require("gulp-rename");
const imagemin = require('gulp-imagemin');
var email = require("./assets/mailer");

gulp.task('server', function() {

    browserSync({
        server: {
            baseDir: "src"
        }
    });

    gulp.watch("assets/*.html").on('change', browserSync.reload);
});

gulp.task('styles', function() {
    return gulp.src("./assets/sass/**/*.+(scss|sass)")
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(rename({suffix: '.min', prefix: ''}))
        .pipe(autoprefixer())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest("assets/css"))
        .pipe(browserSync.stream());
});

gulp.task('watch', function() {
    gulp.watch("assets/sass/**/*.+(scss|sass|css)", gulp.parallel('styles'));
    gulp.watch("assets/*.html").on('change', gulp.parallel('html'));
});

gulp.task ('scripts', function(){
    return gulp.src("assets/js/**/*.js")
        .pipe(gulp.dest('dist/js'));
});

gulp.task ('fonts', function(){
    return gulp.src("assets/fonts/**/*")
        .pipe(gulp.dest('dist/js'));
});

gulp.task('icons', function () {
    return gulp.src("assets/img/icons/**/*")
        .pipe(gulp.dest("dist/icons"));
});


gulp.task('images', function () {
    return gulp.src("assets/img/**/*")
        .pipe(imagemin())
        .pipe(gulp.dest("dist/img"));
});

gulp.task('mailer', function () {
    return gulp.src("assets/mailer/**/*")
        .pipe(gulp.dest("dist/mailer"));
});

gulp.task('default', gulp.parallel('watch', 'server', 'styles', 'scripts', 'fonts', 'icons', 'mailer', 'html', 'images'));