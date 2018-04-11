//load modules
import imgToBackground from '../common/imgToBackground';

// Init modules
const imgToBgd = imgToBackground( jQuery );

/*#####################
### DOM ready calls ###
#####################*/
jQuery(function ( $ ) {

});

/*#######################
### Window load event ###
#######################*/
jQuery( window ).load(function () {
    imgToBgd.makeImgBackground( '.js-image-imgtobg', '.js-background-imgtobg' );
    console.log('asd');
});
