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

$(document).ready(function(){
    $('#title h1 a').mouseenter(function(){
        $('#title h1 a').fadeTo('slow', .4);
    });
    $('#title h1 a').mouseleave(function(){
        $('#title h1 a').fadeTo('fast', 1);
    });
});