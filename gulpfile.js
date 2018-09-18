'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var sourcemap = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');
var concat = require('gulp-concat');
var pump = require('pump');
var uglify = require('gulp-uglify');

//Campo para Tasks css

gulp.task('sass', function(){
	return gulp.src('developer/scss/**/*.scss')
		.pipe(sourcemap.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(postcss([autoprefixer({browsers: ['last 2 versions']})]))
		.pipe(cssmin())
		.pipe(rename({suffix: '.min'}))
		.pipe(sourcemap.write('maps'))
		.pipe(gulp.dest('custom/css'));
});

//Campo para tasks js

gulp.task('javascript', function(){
	return gulp.src('developer/javascript/**/*.js')
	.pipe(concat('all.js'))
	.pipe(rename('app.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('custom/js'));
});

gulp.task('looking', function(){
	gulp.watch('developer/scss/**/*.scss', ['sass']);
	gulp.watch('node_modules/jquery/src/**/*js', ['jquery']);
});

gulp.task('default', ['sass', 'javascript', 'looking']);