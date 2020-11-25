import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import {
  fileURLToPath
} from 'url';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import browserSync from 'browser-sync';

const server = browserSync.create();
const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {
    src: 'src/asset/scss/bundle.scss',
    dest: 'dist/asset/css'
  },
  scripts: {
    src: ['src/asset/js/bundle.js', 'src/asset/js/home.js', 'src/asset/js/becauseofhatch-survey.js', 'src/asset/js/briana-survey.js', 'src/asset/js/hatching-better-world.js', 'src/asset/js/labs-voting.js', 'src/asset/js/registration.js', 'src/asset/js/reunion.js'],
    dest: 'dist/asset/js'
  },
  images: {
    src: 'src/asset/img/**/*.{gif,jpg,jpeg,png,svg}',
    dest: 'dist/asset/img'
  },
  other: {
    src: ['src/asset/**/*', '!src/asset/{img,scss,js}', '!src/asset/{img,scss,js}/**/*'],
    dest: 'dist/asset'
  }
}

export const serve = (done) => {
  server.init({
    proxy: "http://hatch.build"
  });
  done();
}

export const reload = (done) => {
  server.reload();
  done();
}

export const clean = () => del(['dist']);

export const styles = () => {
  return gulp.src(paths.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCSS()))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(server.stream());
}

export const images = () => {
  return gulp.src(paths.images.src)
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(gulp.dest(paths.images.dest))
}

export const watch = () => {
  gulp.watch('src/asset/scss/**/*.scss', styles);
  gulp.watch('src/asset/js/**/*.js', gulp.series(scripts, reload));
  gulp.watch('**/*.php', reload);
  gulp.watch(paths.images.src, gulp.series(images, reload));
  gulp.watch(paths.other.src, gulp.series(copy, reload));
}

export const copy = () => {
  return gulp.src(paths.other.src)
    .pipe(gulp.dest(paths.other.dest));
}

export const scripts = () => {
  return gulp.src(paths.scripts.src)
    .pipe(named())
    .pipe(webpack({
      module: {
        rules: [{
          test: /\.js$/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        }]
      },
      output: {
        filename: '[name].js'
      },
      devtool: !PRODUCTION ? 'inline-source-map' : false,
      mode: PRODUCTION ? 'production' : 'development'
    }))
    .pipe(gulp.dest(paths.scripts.dest));
}


export const dev = gulp.series(clean, gulp.parallel(styles, scripts, images, copy), serve, watch);

export const build = gulp.series(clean, gulp.parallel(styles, scripts, images, copy));

export default dev