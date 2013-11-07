$(document).ready(function() {
   $('#nav ul li a').mouseenter(function() {
       $(this).animate({
           height: '+=.75rem'
       });
   });
   $('#nav ul li a').mouseleave(function() {
       $(this).animate({
           height: '-=.75rem'
       }); 
   });
});