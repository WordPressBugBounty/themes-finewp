/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var finewp_secondary_container, finewp_secondary_button, finewp_secondary_menu, finewp_secondary_links, finewp_secondary_i, finewp_secondary_len;

    finewp_secondary_container = document.getElementById( 'finewp-secondary-navigation' );
    if ( ! finewp_secondary_container ) {
        return;
    }

    finewp_secondary_button = finewp_secondary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof finewp_secondary_button ) {
        return;
    }

    finewp_secondary_menu = finewp_secondary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof finewp_secondary_menu ) {
        finewp_secondary_button.style.display = 'none';
        return;
    }

    finewp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === finewp_secondary_menu.className.indexOf( 'nav-menu' ) ) {
        finewp_secondary_menu.className += ' nav-menu';
    }

    finewp_secondary_button.onclick = function() {
        if ( -1 !== finewp_secondary_container.className.indexOf( 'finewp-toggled' ) ) {
            finewp_secondary_container.className = finewp_secondary_container.className.replace( ' finewp-toggled', '' );
            finewp_secondary_button.setAttribute( 'aria-expanded', 'false' );
            finewp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            finewp_secondary_container.className += ' finewp-toggled';
            finewp_secondary_button.setAttribute( 'aria-expanded', 'true' );
            finewp_secondary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    finewp_secondary_links    = finewp_secondary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( finewp_secondary_i = 0, finewp_secondary_len = finewp_secondary_links.length; finewp_secondary_i < finewp_secondary_len; finewp_secondary_i++ ) {
        finewp_secondary_links[finewp_secondary_i].addEventListener( 'focus', finewp_secondary_toggleFocus, true );
        finewp_secondary_links[finewp_secondary_i].addEventListener( 'blur', finewp_secondary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function finewp_secondary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'finewp-focus' ) ) {
                    self.className = self.className.replace( ' finewp-focus', '' );
                } else {
                    self.className += ' finewp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( finewp_secondary_container ) {
        var touchStartFn, finewp_secondary_i,
            parentLink = finewp_secondary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, finewp_secondary_i;

                if ( ! menuItem.classList.contains( 'finewp-focus' ) ) {
                    e.preventDefault();
                    for ( finewp_secondary_i = 0; finewp_secondary_i < menuItem.parentNode.children.length; ++finewp_secondary_i ) {
                        if ( menuItem === menuItem.parentNode.children[finewp_secondary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[finewp_secondary_i].classList.remove( 'finewp-focus' );
                    }
                    menuItem.classList.add( 'finewp-focus' );
                } else {
                    menuItem.classList.remove( 'finewp-focus' );
                }
            };

            for ( finewp_secondary_i = 0; finewp_secondary_i < parentLink.length; ++finewp_secondary_i ) {
                parentLink[finewp_secondary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( finewp_secondary_container ) );
} )();


( function() {
    var finewp_primary_container, finewp_primary_button, finewp_primary_menu, finewp_primary_links, finewp_primary_i, finewp_primary_len;

    finewp_primary_container = document.getElementById( 'finewp-primary-navigation' );
    if ( ! finewp_primary_container ) {
        return;
    }

    finewp_primary_button = finewp_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof finewp_primary_button ) {
        return;
    }

    finewp_primary_menu = finewp_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof finewp_primary_menu ) {
        finewp_primary_button.style.display = 'none';
        return;
    }

    finewp_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === finewp_primary_menu.className.indexOf( 'nav-menu' ) ) {
        finewp_primary_menu.className += ' nav-menu';
    }

    finewp_primary_button.onclick = function() {
        if ( -1 !== finewp_primary_container.className.indexOf( 'finewp-toggled' ) ) {
            finewp_primary_container.className = finewp_primary_container.className.replace( ' finewp-toggled', '' );
            finewp_primary_button.setAttribute( 'aria-expanded', 'false' );
            finewp_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            finewp_primary_container.className += ' finewp-toggled';
            finewp_primary_button.setAttribute( 'aria-expanded', 'true' );
            finewp_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    finewp_primary_links    = finewp_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( finewp_primary_i = 0, finewp_primary_len = finewp_primary_links.length; finewp_primary_i < finewp_primary_len; finewp_primary_i++ ) {
        finewp_primary_links[finewp_primary_i].addEventListener( 'focus', finewp_primary_toggleFocus, true );
        finewp_primary_links[finewp_primary_i].addEventListener( 'blur', finewp_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function finewp_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'finewp-focus' ) ) {
                    self.className = self.className.replace( ' finewp-focus', '' );
                } else {
                    self.className += ' finewp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( finewp_primary_container ) {
        var touchStartFn, finewp_primary_i,
            parentLink = finewp_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, finewp_primary_i;

                if ( ! menuItem.classList.contains( 'finewp-focus' ) ) {
                    e.preventDefault();
                    for ( finewp_primary_i = 0; finewp_primary_i < menuItem.parentNode.children.length; ++finewp_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[finewp_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[finewp_primary_i].classList.remove( 'finewp-focus' );
                    }
                    menuItem.classList.add( 'finewp-focus' );
                } else {
                    menuItem.classList.remove( 'finewp-focus' );
                }
            };

            for ( finewp_primary_i = 0; finewp_primary_i < parentLink.length; ++finewp_primary_i ) {
                parentLink[finewp_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( finewp_primary_container ) );
} )();