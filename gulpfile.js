// ## GULP ###################################################
const { src, dest, task, watch, series, parallel } = require('gulp');

// ## STYLES RELATED #########################################
const sass              = require("gulp-sass");
const autoprefixer      = require("gulp-autoprefixer");

// ## STYLES RELATED #########################################

// ## JAVASCRIPT RELATED #####################################
const uglify            = require("gulp-uglify");
const babelify          = require("babelify");
const browserify        = require("browserify");
const source            = require("vinyl-source-stream");
const buffer            = require("vinyl-buffer");

// ## UTILITY ################################################
const rename            = require("gulp-rename");
const sourcemaps        = require("gulp-sourcemaps");
const plumber           = require( 'gulp-plumber' );

// ## IMAGES RELATED #########################################
const cache             = require('gulp-cache');
const imagemin          = require('gulp-imagemin');
const imageminPngquant  = require('imagemin-pngquant');
const imageminZopfli    = require('imagemin-zopfli');
const imageminMozjpeg   = require('imagemin-mozjpeg');          // need to run 'brew install libpng'
const imageminGiflossy  = require('imagemin-giflossy');

// ## BROWSER RELATED ########################################
const browserSync       = require("browser-sync").create();

// ## PROJECT RELATED ########################################
const siteUrl           = 'consultants-seo.com';
const externalUrl       = '192.168.0.18';
const assetsUrl         = './assets/';

const styleSRC          = 'src/scss/style.scss';
const styleWatch        = 'src/scss/**/*.scss';

const scriptSRC         = 'script.js';
const scriptFolder      = 'src/js/';
const scriptWatch       = 'src/js/**/*.js';
const scriptFiles       = [scriptSRC];

const phpFiles          = '**/*.php';

const imageSRC          = 'src/img/*';

// ## FUNCTIONS ##############################################
function browser_sync() {
    browserSync.init({
        open: false,
        proxy: siteUrl,
        host: externalUrl,
        port: 3000,
        notify: false
    });
}

function reload(done) {
    browserSync.reload();
    done();
}

function styles(done) {
    src([styleSRC])
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({errLogToConsole: true, outputStyle: 'compressed'}))
        .on('error', console.error.bind(console))
        .pipe(autoprefixer({browsers: ['last 2 versions', '> 5%', 'Firefox ESR']}))
        .pipe(rename('style.min.css'))
        .pipe(sourcemaps.write('./'))
        .pipe(dest(assetsUrl + 'css'))
        .pipe(browserSync.stream());
    done();
}

function scripts(done) {
    scriptFiles.map( function( entry ) {
        return browserify({entries: [scriptFolder + entry]})
            .transform(babelify, {presets: ['@babel/preset-env']})
            .bundle()
            .pipe(source(entry))
            .pipe(rename({extname: '.min.js'}))
            .pipe(buffer())
            .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(uglify())
            .pipe(sourcemaps.write('./'))
            .pipe(dest(assetsUrl + 'js'))
            .pipe(browserSync.stream());
    });
    done();
}

function watch_files() {
    watch(styleWatch, series(styles, reload));
    watch(scriptWatch, series(scripts, reload));
    watch(phpFiles, reload);
}

// ## TASKS ##################################################
task("default", parallel(styles, scripts));
task("watch", parallel(browser_sync, watch_files));