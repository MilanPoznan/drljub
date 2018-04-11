
    $itemHasChildren = jQuery( '.menu-item-has-children' ).children('a');
    $subMenu = jQuery( '.sub-menu' );
    $hamburgerButton = jQuery( '.js-menu-toggle' );
    $siteNavigation = jQuery( '.js-site-navigation' );



if (jQuery( window ).width() < 1199 ) {
    console.log('spremni za mobile');
    $hamburgerButton.on('click',function() {

        $siteNavigation.toggle('slow');

    });
    $itemHasChildren.on('click', function( e ) {

        e.preventDefault();
        jQuery(this).next('ul').toggle('slow');

    });

} else {
    // console.log('radicemo nesto i za komp');
    //
    // $itemHasChildren.hover( function() {
    //     console.log('1');
    //     jQuery(this).next('ul').show('slow');
    //     jQuery(this).next('ul').addClass('.hovered');
    //
    // }, function() {
    //     jQuery(this).next('ul').hide('slow');
    //     jQuery(this).next('ul').removeClass('hovered');
    //
    //
    // });
}
