var gulp = require('gulp'),
    scss = require('gulp-sass'),
    bourbon = require('node-bourbon').includePaths,
    uglify = require('gulp-uglify'),
    uglifycss = require('gulp-uglifycss'),
    concat = require('gulp-concat');


gulp.task('js', function() {
    gulp.src(['./resources/assets/vendor/jquery/js/jquery.js',
        './resources/assets/vendor/datatables/js/jquery.datables.js',
        './resources/assets/vendor/datatables/js/datables.boostrap.js',
        './resources/assets/vendor/datatables/js/datables.responsive.js',
        './resources/assets/vendor/jquery-ui/js/jquery-ui.js',
        './resources/assets/vendor/timepicker/js/timepicker.js',
        './resources/assets/vendor/timepicker/js/timepicker.addon.js',
        './resources/assets/vendor/ck-editor/js/ckeditor.js',
        './resources/assets/vendor/boostrap/boostrap.js',
        './resources/assets/vendor/bootstrap-select/js/boostrap-select.js',
        './resources/assets/vendor/sweetalert/js/sweetalert.min.js',
        './resources/assets/js/main.js',
    ])
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/js/dist/'))
});

gulp.task('scss', function() {
    return gulp.src('./resources/assets/sass/style.scss')
        .pipe(scss({
            errLogToConsole: true,
            includePaths: ['styles'].concat(bourbon)
        }))
        .pipe(gulp.dest('public/assets/css/dist/compiled'));
});



gulp.task('css', function() {
    gulp.src(['./node_modules/bootstrap-css-only/css/bootstrap.css',
        './resources/assets/vendor/font-awesome/css/font-awesome.css',
        './resources/assets/vendor/jquery-ui/css/jquery-ui.css',
        './resources/assets/vendor/timepicker/css/timepicker.addon.css',
        './resources/assets/vendor/bootstrap-datepicker/css/datepicker.standalone.css',
        './resources/assets/vendor/datatables/css/material.datables.css',
        './resources/assets/vendor/datatables/css/responsive.datatables.css',
        './resources/assets/vendor/bootstrap-select/css/boostrap-select.css',
        './resources/assets/vendor/sweetalert/css/sweetalert.css',
        './public/assets/css/dist/compiled/style.css',

    ])
        .pipe(concat('all.css'))
        .pipe(uglifycss())
        .pipe(gulp.dest('public/assets/css/dist/'))
});

gulp.task('default', ['js', 'scss', 'css']);