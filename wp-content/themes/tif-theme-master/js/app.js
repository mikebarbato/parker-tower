jQuery(document).ready(function( $ ) {
    
    if (!('ontouchstart' in window)) {
        $('[data-toggle="tooltip"]').tooltip();
    }
    
    $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true
    });
	
	// Home bg slider
	$('.slick-slider').slick({
		dots: true,
		infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
		arrows: false,
		fade: true
	});
	
	// Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    // $("#sidebar-wrapper a[href^='#']").on('click', function(e) {
    
    //     e.preventDefault();
    //     var hash = this.hash;
    
    //     $('html, body').animate({
    //         scrollTop: $(hash).offset().top
    //         }, 300, function() {
    //             window.location.hash = hash;
    //     });
    // });
    
    // File tree setup
    $(function() {
        $('.file-tree-holder .file-tree li > ul').each(function(i) {
            var parent_li = $(this).parent('li');
            parent_li.addClass('folder');
            var sub_ul = $(this).remove();
            
            parent_li.wrapInner('<p/>').find('p').click(function() {
                sub_ul.slideToggle();
            });
            
            parent_li.append(sub_ul);
        });
        $('ul ul').hide();
    });
    
    $.simpleWeather({
        location: 'Hallandale, FL',
        woeid: '',
        unit: 'f',
        success: function(weather) {
            var forcast = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
    
            $("#weather").html(forcast);
        },
        error: function(error) {
            $("#weather").html('<p>'+error+'</p>');
        }
    });
    
    if ($('#back-to-top').length) {
        var scrollTrigger = 400, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

});