import gulp from 'gulp';
import terser  from 'gulp-terser';

// エラーでも監視を続行させる
gulp.task('minify-js', function () {
  return gulp.src('src/*.js')   // 圧縮元
    .pipe(terser())
    .pipe(gulp.dest('build/'));      // 出力先
});


// dist ////////////////////////////////////////////////

gulp.task( 'dist', function () {
	return gulp
		.src(
			[
				'./build/**',
		'./**/*.php',
				'./**/*.txt',
				'!./tests/**',
				'!./dist/**',
				'!./node_modules/**/*.*',
				'!./src/**',
			],
			{
				base: './',
			}
		)
		.pipe( gulp.dest( 'dist/vk-ai-editmate' ) );
} );