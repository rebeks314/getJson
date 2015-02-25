console.log("work");

$(document).ready(function() {

    "getjson.json",
            function(data) {

                $("#div1").text(data.lista);

            };

});