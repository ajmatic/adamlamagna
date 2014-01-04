$(document).ready(function(){

    $('#toDo').on('submit', function(e){
        e.preventDefault();
        var toAdd = $('input[name=checkListItem]').val();
        $('.list').append("<li class='item' title='click to remove'>" + toAdd +"</li>");
        $('input[name=checkListItem]').val("");

    });

    $(document).on('click', '.item', function() {
        $(this).remove();
    });

    

});

