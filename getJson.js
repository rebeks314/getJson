console.log("work");

$(document).ready(function() {

    $.getJSON('getJson.json',function(data) {

                $("#div1").text(data.lista);
                
                $.each(data.lista, function(key, val){
                    $('<li id"' + '">').text(val).appendTo("#div1");
              
               
                });

            });
            
            $('.grupp').change(function(data) {
                
                $('.subgrupp option').remove();
                
                switch (data){
                    
                    case 0:
                    case 1:   
                        
                
                
                $('.subgrupp').append('<option value="0">Liten</option>');
                $('.subgrupp').append('<option value="0">Stor</option>');
                console.log("lista");
        
                }
                
            });

});