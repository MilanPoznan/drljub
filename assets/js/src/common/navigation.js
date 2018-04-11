
function Navigation ( $ ) {

  const $itemHasChildren = $( '.menu-item-has-children' ).children('a');
  const $hamburgerButton = $('.js-menu-toggle' );
  const $siteNavigation = $( '.js-site-navigation' );
  const $hamburgerLines = $( '.js-hamburger-lines' );
  let isOpen = false;


  function openMenu() {


    $hamburgerButton.on('click',function() {
      $siteNavigation.toggle('fast');

      if ( !isOpen ) {
        $hamburgerLines.addClass('is-open');
        isOpen = true;
      } else {
          $hamburgerLines.removeClass('is-open');
          isOpen = false;
      }

    });

    $itemHasChildren.on('click', function( e ) {

        e.preventDefault();
        $(this).next('ul').toggle('slow');
    });

  }

  function init() {
    if (screen.width < 1199) {
      openMenu();
    }

	}
  return {
		init
	}
}

export default Navigation;
