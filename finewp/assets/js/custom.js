jQuery(document).ready(function($) {

    if(finewp_ajax_object.secondary_menu_active){

    //$(".finewp-secondary-nav .finewp-secondary-nav-menu").addClass("finewp-secondary-responsive-menu").before('<div class="finewp-secondary-responsive-menu-icon"></div>');
    $(".finewp-secondary-nav .finewp-secondary-nav-menu").addClass("finewp-secondary-responsive-menu");

    $( ".finewp-secondary-responsive-menu-icon" ).on( "click", function() {
        $(this).next(".finewp-secondary-nav .finewp-secondary-nav-menu").slideToggle();
    });

    $(window).on( "resize", function() {
        if(window.innerWidth > 1112) {
            $(".finewp-secondary-nav .finewp-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".finewp-secondary-responsive-menu > li").removeClass("finewp-secondary-menu-open");
        }
    });

    $( ".finewp-secondary-responsive-menu > li" ).on( "click", function(event) {
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('finewp-submenu-toggle').parent().toggleClass("finewp-secondary-menu-open");
        $(this).find(".children:first").toggleClass('finewp-submenu-toggle').parent().toggleClass("finewp-secondary-menu-open");
    });

    $( "div.finewp-secondary-responsive-menu > ul > li" ).on( "click", function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('finewp-submenu-toggle').parent().toggleClass("finewp-secondary-menu-open");
    });

    }

    if(finewp_ajax_object.primary_menu_active){

    if(finewp_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var finewpstickyNavTop = $('.finewp-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var finewpstickyNav = function(){
        var finewpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(finewp_ajax_object.sticky_menu_mobile){
            if (finewpscrollTop > finewpstickyNavTop) {
                $('.finewp-primary-menu-container').addClass('finewp-fixed');
            } else {
                $('.finewp-primary-menu-container').removeClass('finewp-fixed');
            }
        } else {
            if(window.innerWidth > 1112) {
                if (finewpscrollTop > finewpstickyNavTop) {
                    $('.finewp-primary-menu-container').addClass('finewp-fixed');
                } else {
                    $('.finewp-primary-menu-container').removeClass('finewp-fixed'); 
                }
            }
        }
    };

    finewpstickyNav();
    // and run it again every time you scroll
    $(window).on( "scroll", function() {
        finewpstickyNav();
    });
    }

    //$(".finewp-primary-nav .finewp-primary-nav-menu").addClass("finewp-primary-responsive-menu").before('<div class="finewp-primary-responsive-menu-icon"></div>');
    $(".finewp-primary-nav .finewp-primary-nav-menu").addClass("finewp-primary-responsive-menu");

    $( ".finewp-primary-responsive-menu-icon" ).on( "click", function() {
        $(this).next(".finewp-primary-nav .finewp-primary-nav-menu").slideToggle();
    });

    $(window).on( "resize", function() {
        if(window.innerWidth > 1112) {
            $(".finewp-primary-nav .finewp-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".finewp-primary-responsive-menu > li").removeClass("finewp-primary-menu-open");
        }
    });

    $( ".finewp-primary-responsive-menu > li" ).on( "click", function(event) {
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('finewp-submenu-toggle').parent().toggleClass("finewp-primary-menu-open");
        $(this).find(".children:first").toggleClass('finewp-submenu-toggle').parent().toggleClass("finewp-primary-menu-open");
    });

    $( "div.finewp-primary-responsive-menu > ul > li" ).on( "click", function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('finewp-submenu-toggle').parent().toggleClass("finewp-primary-menu-open");
    });

    }

    $(".finewp-social-icon-search").on('click', function (e) {
        e.preventDefault();
        document.getElementById("finewp-search-overlay-wrap").style.display = "block";
    });

    $(".finewp-search-closebtn").on('click', function (e) {
        e.preventDefault();
        document.getElementById("finewp-search-overlay-wrap").style.display = "none";
    });

    $(".post").fitVids();

    var scrollButtonEl = $( '.finewp-scroll-top' );
    scrollButtonEl.hide();

    $(window).on( "scroll", function() {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.finewp-scroll-top' ).fadeOut();
        } else {
            $( '.finewp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.on( "click", function() {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if ( $().owlCarousel ) {
        var finewpcarouselwrapper = $('.finewp-posts-carousel');
        var imgLoad = imagesLoaded(finewpcarouselwrapper);
        imgLoad.on( 'always', function() {
            finewpcarouselwrapper.each(function(){
                    var $this = $(this);
                    $this.find('.owl-carousel').owlCarousel({
                        autoplay: false,
                        loop: false,
                        margin: 0,
                        smartSpeed: 250,
                        dots: false,
                        nav: true,
                        autoplayTimeout: 4000,
                        autoHeight: false,
                        navText: [ '<i class="fa fa-arrow-left" aria-hidden="true"></i><span class="screen-reader-text">Previous</span>', '<i class="fa fa-arrow-right" aria-hidden="true"></i><span class="screen-reader-text">Next</span>' ],
                        responsive:{
                        0:{
                            items: 1
                        },
                        480:{
                            items: 2
                        },
                        991:{
                            items: 3
                        },
                        1024:{
                            items: 4
                        }
                    }
                });
            });
            $(".finewp-posts-carousel-wrapper .finewp-posts-carousel .owl-theme .owl-nav .owl-prev").attr("tabindex",-1);
            $(".finewp-posts-carousel-wrapper .finewp-posts-carousel .owl-theme .owl-nav .owl-next").attr("tabindex",-1);
        });
    } // end if

    if(finewp_ajax_object.sticky_sidebar){
        $('.finewp-main-wrapper, .finewp-sidebar-one-wrapper').theiaStickySidebar({
            containerSelector: ".finewp-content-wrapper",
            additionalMarginTop: 0,
            additionalMarginBottom: 0,
            minWidth: 890,
        });

        $(window).on( "resize", function() {
            $('.finewp-main-wrapper, .finewp-sidebar-one-wrapper').theiaStickySidebar({
                containerSelector: ".finewp-content-wrapper",
                additionalMarginTop: 0,
                additionalMarginBottom: 0,
                minWidth: 890,
            });
        });
    }

    // init Masonry
    var $finewp_grid = $('.finewp-posts').masonry({
      itemSelector: '.finewp-grid-post',
      columnWidth: finewp_ajax_object.columnwidth,
      gutter: finewp_ajax_object.gutter,
      percentPosition: true
    });
    // layout Masonry after each image loads
    $finewp_grid.imagesLoaded().progress( function() {
      $finewp_grid.masonry('layout');
    });


    $(".finewp-grid-posts").each(function(){
    var $thisgrid = $(this);

    // init Masonry
    var $finewp_grid_widget = $thisgrid.masonry({
      itemSelector: '.finewp-grid-post',
      columnWidth: $thisgrid.find(".finewp-col-sizer")[0],
      gutter: $thisgrid.find(".finewp-col-gutter")[0],
      percentPosition: true
    });
    // layout Masonry after each image loads
    $finewp_grid_widget.imagesLoaded().progress( function() {
      $finewp_grid_widget.masonry('layout');
    });

    });

});