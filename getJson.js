$(document).ready(function() {
    console.log("hej");


    $('.grupp').change(function() {

        $.getJSON('getJson.json', function(data) {

//            $('<li>').text(data.namn[0]).appendTo('#div1');
            $('.subgrupp option').remove();
            var djur = parseInt($('.grupp').val());

            $.each(data.lista[djur], function(key, val) {
//                $('<li id="' + key + '">').text(val).appendTo('#div1');
                $('.subgrupp').append('<option value="'+key+'">'+ val +'</option>');

            });
        });


        console.log(djur);
        switch (djur) {
            case 0:
                console.log("switch 0");
                $('.subgrupp').append('<option value="1">Stor</option>');

                break;
            case 1:
                console.log("switch 1");
                break;
            default:
                console.log("default");
                break;
//
//
        }
//       

    });
});

$(document).ready(function(){
    

$.getJSON('index.php', function(data) {
    
    console.log(data.hundar[0]);
    
    $.each(data.lista[djur], function(key, val) {
    

        
    
    
    
});

});

});

//$(document).ready(function(){
//    $("marke".change(function(){
//     var marke = $('#marke').val();   
//     $.getJSON("index.php",{namn: marke},function(data) {
//    $('ul').append("<li>"+data.hundar[0].namn+"</li>");
//    
//});
//
//});
//
//
//
//    }
