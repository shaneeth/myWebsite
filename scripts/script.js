$(document).ready(function() {

    var htmlBody = $('html, body');
    htmlBody.animate({
        scrollTop: 0
    }, 1000, 'easeOutQuad');
    $('body').animate({
        opacity: 1
    }, 600, 'easeInQuint');
    /*
     *  Scripts related to menus
     */
    var navMenus = $('nav.menu .emenu'),
        navMenuSelected = $(navMenus[0]);
    navMenuSelected.addClass('active');
    navMenus.on('click', function() {
        navMenuSelected.removeClass('active');
        navMenuSelected = $(this);
        navMenuSelected.addClass('active');
    });
    function setActiveMenu(currentElem) {
        navMenuSelected.removeClass('active');
        navMenuSelected = $(currentElem);
        navMenuSelected.addClass('active');
    }
    function moveToSection(sel) {
        htmlBody.stop(true);
        htmlBody.animate({
            scrollTop: $(sel).offset().top
        }, 1000, 'easeOutQuad');
    }
    $('a.menu-link').on('click', function(event) {
        moveToSection($(this).attr('href'));
        event.preventDefault();
    });

    /*
     *  Scripts related to content
     */
    var aboutElem = $("#about-me"),
        worksElem = $("#my-works"),
        connectElem = $("#connect-me"),
        tempActiveMenu = '';
    /*
     *  Scripts related to scroll
     */
    function selectMenuOnScroll() {
        tempActiveMenu = navMenus[0];
        if($(this).scrollTop()+400 > aboutElem.offset().top) {
            tempActiveMenu = navMenus[1];
        }
        if($(this).scrollTop()+400 > worksElem.offset().top) {
            tempActiveMenu = navMenus[2];
        }
        if($(this).scrollTop()+400 > connectElem.offset().top) {
            tempActiveMenu = navMenus[3];
        }
        setActiveMenu(tempActiveMenu);
    }
    $(window).on('scroll', function() {
        selectMenuOnScroll();
    });

    /*
     *  Scripts related to Photos slider
     */
    var fluxSlider = new flux.slider("#my-photos-slider", {
        autoplay: true,
        pagination: false,
        delay: 5000
    });

    /*
     * Scripts related to Hobbies
     */
    $(".hobbies .hobbies-in").on('mouseenter', function() {
        if($(this).attr('hobby-target')) {
            $(this).siblings($(this).attr('hobby-target')).animate({
                opacity: 1,
                zIndex: 1
            }, 500, 'easeOutQuint');
        }
    }).on('mouseleave', function() {
        if($(this).attr('hobby-target')) {
            $(this).siblings($(this).attr('hobby-target')).animate({
                opacity: 0,
                zIndex: 0
            }, 100, 'easeInQuint');
        }
    });
    /*
     *  Scripts related to Magnific popup
     */
    $(".work-link").magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    })
    /*
     * Scripts related to connect
     */
    $('.ext-link').on('click', function() {
        $(location).attr('href', $(this).attr('href'));
    });

});