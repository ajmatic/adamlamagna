$(document).ready(function(){
    $('#button').click(function(){
        $(document).on('click', '.item', function() {
        $(this).remove();
        });
    var toAdd = $('input[name=checkListItem]').val();
    $('.list').append("<div class='item'>" + toAdd +"</div>");
    });
});

$(document).ready(function(){
    $('#ball').click(function(){
        $(this).effect('explode');
    });
});