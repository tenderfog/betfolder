$(document).ready(function(e) {



   jQuery('input, select').focus(function(){
     jQuery(this).data('placeholder',jQuery(this).attr('placeholder'))
     jQuery(this).attr('placeholder','');
     jQuery(this).parent().prevAll( '.span-title' ).css("opacity","1");
   });
   jQuery('input, select').blur(function(){
     jQuery(this).attr('placeholder',jQuery(this).data('placeholder'));
     jQuery(this).parent().prevAll( '.span-title' ).css("opacity","0");
     
   });


});