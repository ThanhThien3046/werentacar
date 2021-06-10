// var gih = require("gulp-include-html");
// gulp.task('build-html' , function(){
//     return gulp.src("./html-init/**/*.html")
//         .pipe(gih({
//             'public':"./public/bizapp" + version,
//             'version':version,
            
//             baseDir:'./html/modules/',
//             ignore:/modules/
//         }))
//         .pipe(gulp.dest("./dest"));
// });

'use strict';
var gulp = require('gulp'),
    del = require('del'),
    fileinclude = require('gulp-file-include'),
    browserSync = require('browser-sync').create();

// Clear the dist folder
gulp.task('clean', function () {
    return del.sync('./app/dist');
});

//  html integration
gulp.task('html', function () {
    return gulp.src('./app/src/template/*.html')
    .pipe(fileinclude())
    .pipe(gulp.dest('./app/dist'));
});

//  Configure the server
gulp.task('serve', function () {
    browserSync.init({
        server: {
            baseDir: './app/dist'
        },
        port: 8000
    });
    //  Monitor html
    gulp.watch('./app/src/template/**/*.html', ['html']).on('change', browserSync.reload);
});

gulp.task('default', ['clean', 'html', 'serve']);