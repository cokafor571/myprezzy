jQuery(document).ready(function($) {
    
    
    /*Sticky navigation to the top of page */
    var stickyNavTop = $('.storefront-primary-navigation').offset().top;
    
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop(); 
        
        if (scrollTop > stickyNavTop) {
            $('.storefront-primary-navigation').addClass('sticky-header');
            $('.site-header').addClass('.shifted'); 
        }   else {
                $('.storefront-primary-navigation').removeClass('sticky-header');
                $('.site-header').removeClass('.shifted');
        }
    });
    
    
    
    
$('.darken').hover(function() {
    $(this).find('img').fadeTo(500, 0.5);
    }, function() {
    $(this).find('img').fadeTo(500, 1);
});
    
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: (target.offset().top - 20)
            }, 1000);
            return false;
          }
        }
      });
    });
});

   



