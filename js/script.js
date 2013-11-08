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
    $('#title').mouseenter(function(){
        $('#title').fadeTo('fast', .5);
    });
    $('#title').mouseleave(function(){
        $('#title').fadeTo('fast', 1);
    });
});