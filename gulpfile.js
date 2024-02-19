const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify-es').default;
const cleanCSS = require('gulp-clean-css');
const gcmq = require('gulp-group-css-media-queries');
const sourcemaps = require('gulp-sourcemaps');
const php2html = require("gulp-php2html");
const beautify = require('gulp-beautify');


//  php to html
gulp.task('php', function () {
     gulp.src("./src/php/project/*.php")
        .pipe(php2html())
        .pipe(gulp.dest("./dist/"))
    gulp.src("./src/php/examples/*.php")
        .pipe(php2html())
        .pipe(gulp.dest("./examples/"))
});



//  html beautify
gulp.task('beautify-html', function () {
    return gulp
        .src('./dist/*.html')
        .pipe(beautify.html({indent_size: 4}))
        .pipe(gulp.dest('./dist/'));
});

//  html beautify
gulp.task('beautify-html-examples', function () {
    return gulp
        .src('./examples/*.html')
        .pipe(beautify.html({indent_size: 4}))
        .pipe(gulp.dest('./examples/'));
});

// Copy
gulp.task('copy', function () {
    gulp.src('./src/images/**/*')
        .pipe(gulp.dest('./dist/images/'))
    gulp.src('./src/fonts/**/*')
        .pipe(gulp.dest('./dist/fonts/'))
    gulp.src('./src/js/**/*')
        .pipe(gulp.dest('./dist/js/'))

});

// Compile Sass files and minify output file
gulp.task('sass', function () {
    return gulp.src([
        'src/sass/**/*'
    ])
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(gcmq())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))

        .pipe(cleanCSS())
        .pipe(gulp.dest('./dist/css'))
});


// Concatenate js files and minify output file
gulp.task('scripts', function () {
    return gulp.src([
        // Child themes scripts
        './src/js/**/*',
    ])
        .pipe(gulp.dest('./dist/js/'))
        .pipe(uglify())

});

// Watch
gulp.task('watch', function () {

    // SCSS
    gulp.watch([
        './src/sass/**/*'
    ], [
        'sass'
    ]);

    // JS
    gulp.watch([
        './src/js/**/*.js'
    ], [
        'scripts'
    ]);

    //  HTML
    gulp.watch([
        './src/php/**/*.php',
        './src/php-framework/**/*.php',
    ], [
        'php'
    ]);

    // Copy
    gulp.watch([

        './src/images/**/*',
        './src/fonts/**/*',
        './src/js/**/*'
    ], [
        'copy'
    ]);
});
gulp.task('run', ['sass', 'scripts', 'php', 'copy', 'watch']);
gulp.task('default', ['run']);
gulp.task('html', ['beautify-html', 'beautify-html-examples']);






