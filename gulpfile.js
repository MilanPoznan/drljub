// Store modules
var gulp = require( 'gulp' ),
    glob = require( 'glob' ),
    es = require( 'event-stream' ),
    rename = require( 'gulp-rename' ),
    gutil = require( 'gulp-util' ),
    sass = require( 'gulp-sass' ),
    autoprefixer = require( 'gulp-autoprefixer' ),
    postcss = require( 'gulp-postcss' ),
    flexibility = require( 'postcss-flexibility' ),
    uglify = require( 'gulp-uglify' ),
    browserify = require( 'browserify' ),
    babelify = require( 'babelify' ),
    source = require( 'vinyl-source-stream' ),
    buffer = require( 'vinyl-buffer' );

// Store file paths
var cssEntry = 'assets/sass/**/*.scss',
    cssOut = './',
    jsMainEntry = 'assets/js/src/common/index.js',
    jsMainWatch = 'assets/js/src/common/**/*.js',
    jsMainOut = 'assets/js',
    jsPageSpecificWatch = 'assets/js/src/page-specific-scripts/*.js',
    jsPageSpecificOut = 'assets/js';


gulp.task( 'css', function () {
    gulp.src( cssEntry )
        .pipe( sass({
            outputStyle: 'compressed'
        }))
        .on( 'error', gutil.log )
        .pipe( autoprefixer({
            browsers: ['last 3 versions' ]
        }))
        .on( 'error', gutil.log )
        .pipe( postcss( [ flexibility ] ) )
        .on( 'error', gutil.log )
        .pipe( gulp.dest( cssOut ) );
});

gulp.task( 'jsMain', function () {
    browserify( jsMainEntry )
        .transform( 'babelify', { presets: [ 'es2015' ] } )
        .bundle()
        .on( 'error', function ( err ) {
            gutil.log( err );
            this.emit( 'end' );
        } )
        .pipe( source( 'main.js' ) )
        .pipe( buffer() )
        .pipe( uglify() )
        .pipe( gulp.dest( jsMainOut ) );
});

gulp.task( 'jsPageSpecific', function ( done ) {
    glob( jsPageSpecificWatch, ( err, files ) => {

        if ( err ) done( err );

        var tasks = files.map( ( entry ) => {
            return browserify( entry )
                        .transform( 'babelify', { presets: [ 'es2015' ] } )
                        .bundle()
                        .on( 'error', function ( err ) {
                            gutil.log( err );
                            this.emit( 'end' );
                        } )
                        .pipe( source( entry ) )
                        .pipe( buffer() )
                        .pipe( rename({
                            dirname: '' } // strip dinamically generated paths
                        ))
                        .pipe( uglify() )
                        .pipe( gulp.dest( jsPageSpecificOut ) );

        });

        es.merge( tasks ).on( 'end', done );

    });
});

gulp.task( 'watch', function () {
    gulp.watch( cssEntry, [ 'css' ] );
    gulp.watch( jsMainWatch, [ 'jsMain', 'jsPageSpecific' ] );
    gulp.watch( jsPageSpecificWatch, [ 'jsPageSpecific' ] );
});

gulp.task( 'default', [ 'css', 'jsMain', 'jsPageSpecific', 'watch' ] );
