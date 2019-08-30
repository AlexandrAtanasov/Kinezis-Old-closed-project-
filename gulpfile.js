'use strict';

var gulp = require('gulp'),
	// sass = require('gulp-sass'),
	// gl = require('gulp-load-plugins')();
	browserSync = require('browser-sync').create(),
	concat = require('gulp-concat'),
	autoprefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	clean = require('gulp-clean'),
	csso = require('gulp-csso');

// sass.compiler = require('node-sass');

// starting server
// Static server
// gulp.task('browser-sync', function() {
//     browserSync.init({
//         server: {
//             baseDir: "/"
//         }
//     });
// 	// gulp.watch("./").on('change', browserSync.reload)
// });
//proxy
// gulp.task('browser-sync', function() {
//     browserSync.init({
// 			proxy: "http://kinezis.perm/",
// 			host: 'kinezis.perm',
// 			port: 3000,
// 			open: 'external',
// 			notify:    true,
// 			ghost:     true,
// 			// files:     ['C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\']
// 			files:     ['/']
// 	});
// // 	browserSync.watch("C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\").on('change', browserSync.reload)
// });

// working whith sass
// gulp.task('sass', function () {
//   return gulp.src('./dev/css/sass/**/*.scss')
//     .pipe(sass().on('error', sass.logError))
// 	.pipe(gl.autoprefixer({
//     	browsers: ['last 10 versions'],
//     	cascade: false}))
// 	.pipe(gl.csso())
//     .pipe(gulp.dest('../../public/KP_P_test/test_css'))
// });

// copying data project tasks
gulp.task('copy_img', function() {
	return gulp.src('./dev/img/**/*.*')
		.pipe(gulp.dest('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\img'))
		.pipe(browserSync.stream());
});
gulp.task('copy_html', function() {
	return gulp.src('./dev/html/**/*.html')
	.pipe(gulp.dest('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\html\\'))
	.pipe(browserSync.stream());
});
gulp.task('copy_php', function() {
	return gulp.src('./dev/php/**/*.php')
		.pipe(gulp.dest('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\php\\'))
		.pipe(browserSync.stream());
	});
gulp.task('copy_index', function() {
	return gulp.src('./dev/index.php')
	.pipe(gulp.dest('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\'))
	.pipe(browserSync.stream());
});

// concat js and css tasks
gulp.task('concat_css', function() {
	return gulp.src([
		'./css/grid.css',
		'./css/main_style.css',
		'./css/decoration_rules.css',
		'./css/header.css',
		'./css/navigation.css',
		'./css/content_activities.css',
		'./css/content_person.css',
		'./css/content_article.css',
		'./css/content_contacts.css',
		'./css/content_prices.css',
		'./css/footer.css',
		'./css/overlay.css',
		'./css/scrollingElements.css',
		'./css/slider.css',
		'./css/carousel.css',
		'./css/media_query.css'
	])
	.pipe(concat('style.css'))
	.pipe(autoprefixer({
    	// browsers: ['last 10 versions'],
    	cascade: false}))
	.pipe(csso())
	// .pipe(gulp.dest('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\css\\'))
	.pipe(gulp.dest('./public/css/'))
	// .pipe(browserSync.stream());
  });
gulp.task('concat_js', function() {
	return gulp.src([
		'./js/menu_desktop_and_mobile_slideup.js',
		'./js/scroll_window.js',
		'./js/scrollTo.js',
		'./js/overlay_callback.js',
		'./js/overlay_menu.js',
		'./js/overlay_callback_submit.js',
		'./js/overlaySliderPainting.js',
		'./js/slider.js',
		'./js/openSlider.js',
	 // './js/download_files.js',
		'./js/carousel.js'
	])
	.pipe(concat('script.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./public/js/'))
	
	// .pipe(browserSync.stream());;
  });

// start watching by *js and *css
gulp.task('concat', function() {
	gulp.watch("./js/**/*.js", gulp.series('concat_js'));
	gulp.watch("./css/*.css", gulp.series('concat_css'));
});

// clean destination folders tasks
gulp.task('clean_dest_img', function() {
	return gulp.src('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\img\\**\\*.*',
		{read:false}).pipe(gl.clean({force:true}))
});
gulp.task('clean_dest_css', function() {
	return gulp.src('./public/css/**/*.*',
		{read:false}).pipe(clean({force:true}))
});
gulp.task('clean_dest_html', function() {
	return gulp.src('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\html\\**\\*.*',
		{read:false}).pipe(gl.clean({force:true}))
});
gulp.task('clean_dest_js', function() {
	return gulp.src('./public/js/**/*.*',
		{read:false}).pipe(clean({force:true}))
});
gulp.task('clean_dest_php', function() {
	return gulp.src('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\php\\**\\*.*',
		{read:false}).pipe(gl.clean({force:true}))
});
gulp.task('clean_dest_index', function() {
	return gulp.src('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\index.php',
		{read:false}).pipe(gl.clean({force:true}))
});

// watching for folders for any changes task
gulp.task('watchThis', function() {
	gulp.watch('./js/**/*.js', gulp.series('clean_dest_js', 'concat_js') );
	gulp.watch('./css/*.css', gulp.series('clean_dest_css', 'concat_css') );
	// gulp.watch('./dev/js/**/*.js', gulp.series('clean_dest_js', 'concat_js') );
	// gulp.watch('./dev/html/**/*.html', gulp.series('clean_dest_html', 'copy_html') );
	// gulp.watch('./dev/img/**/*.*', gulp.series('clean_dest_img', 'copy_img') );
	// gulp.watch('./dev/php/**/*.php', gulp.series('clean_dest_php', 'copy_php') );
	// gulp.watch('./dev/*.php', gulp.series('clean_dest_index', 'copy_index') );
});

gulp.task('default', 
	// gulp.parallel('watchThis', 'serve'),
	gulp.parallel('concat'),
	);

// task for copying working files from OSP to public   
gulp.task('clearPublic', function() {
	return gulp.src('./public/', {read:false})
	.pipe(gl.clean({force:true}))
});
gulp.task('copyToPublic', function(){
	return gulp.src('C:\\Users\\Александр\\Desktop\\ospanel\\domains\\kinezis.perm\\**\\*.*')
	.pipe(gulp.dest('./public/'))
});
gulp.task('toPublic', gulp.series('clearPublic', 'copyToPublic'));
