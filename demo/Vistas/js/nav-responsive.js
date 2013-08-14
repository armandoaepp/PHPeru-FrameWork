// NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
// IT'S ALL JUST JUNK FOR OUR DOCS!
// ++++++++++++++++++++++++++++++++++++++++++

!function ($) {

  $(function(){

    // fix sub nav on scroll
    var $win = $(window)
      , $nav = $('.nav')
      , navTop = $('.nav').length && $('.nav').offset().top
      , isFixed = 0

    processScroll()

    $win.on('scroll', processScroll)

    function processScroll() {
      var i, scrollTop = $win.scrollTop()
      if (scrollTop >= navTop && !isFixed) {
        isFixed = 1
        $nav.addClass('nav-fixed-top')
      } else if (scrollTop <= navTop && isFixed) {
        isFixed = 0
        $nav.removeClass('nav-fixed-top')
      }     
    }


  })

  $(function() {
      var pull = $('#pull');
          menu = $('nav ul');
          menuHeight = menu.height();

      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });

      $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });
}(window.jQuery)