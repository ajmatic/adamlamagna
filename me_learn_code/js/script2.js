$(document).ready(function(){

    $('#txtName').on('submit', function(e){
        e.preventDefault();
        var toAdd = $('button[onclick="sayHi()"]').val();
        $('.list').append("<div id='divOutput'>" + toAdd +"</div>");
        $('button[onclick="sayHi()"]').val("");

    });

   

    

});