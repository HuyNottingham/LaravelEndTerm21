
(function ($) {
  "use strict";

  $('.tab_title_block a').click( function(){
    if ( !$(this).hasClass('active') ) {
      alert('ko');
      $('.tab_title_block.active').removeClass('active');
      $(this).addClass('active');
      $(this).parent().parent().parent().find('div.active').removeClass('active');
      $($(this).href).addClass('active');

    } else alert('co');
    return false;
  });


}(jQuery));