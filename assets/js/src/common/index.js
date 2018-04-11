/**************************
* Entry point for main.js *
**************************/

// load modules
import Navigation from './navigation';
import ImgToBackground from './imgToBackground';

// init modules
const imgToBgd = ImgToBackground( jQuery );


// DOM ready calls
jQuery( function( $ ) {

    // init navigation module
    const navigation = new Navigation( $ );
    navigation.init();

});

jQuery( window ).load(function () {
    imgToBgd.makeImgBackground( '.js-image-imgtobg', '.js-background-imgtobg' );
    // console.log('asd');
});
