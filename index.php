<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hejsan!</title>
        
<!--        <script src="getJosn.json"></script>--> 
       <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="getJson.js"></script>
       
        
    </head>
    <body>
        
        <div id="div1"></div>
        <p class="mule"></p>
        
<!--         <button class="btn">Button!</button>
        <button class="read">Läs in JSON</button>-->
        
        
         <select name="grupp" class="grupp">
            <option value="">djur</option>
            <option value="0">katt</option>
            <option value="1">hund</option>
        </select>
        <select name="subgrupp" class="subgrupp">

        </select>
        <p class="json-target"></p>
         
        
         
<!--         <script>
//            console.log("Jacob");
            document.getElementById(".mule").innerHTML = "ny text";
            $('#div1').text("ny text igen");
            $('.btn').click(function() {
                //$('.btn').hide();
                $('.btn').animate(
                        {width: 500, height: 700, left: 1000}, 5000);
                console.log("klick körs. Knapp gömd.");
            });
            $('.read').click(function() {
                console.log("read klickad");
                $.getJSON("getJson.json", function(data) {
                    console.log("getJSON körs");
                    console.log(data);
                    $('.mule').append("<p>" + data.namn + "</p>");
                    $('.mule').append("<p>" + data.ålder + "</p>");
                });
            });
            $('.grupp').change(function() {
                console.log("change triggad");
                console.log($('.grupp').val());
                $.getJSON("getJson.json", function(data) {
                    console.log(data);
                    $('.subgrupp').remove();
                    $('.subgrupp').append('<option value="">gg</option>');
                });
            });
        </script>-->
        
        <?php
//        session_start();
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "hundar");


$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$sql = "SELECT * FROM `katter` WHERE 1";
     
if(isset($_GET["katter"])){
  $sql = "SELECT `id`, `namn` FROM `katter` WHERE 1".[GET_katter]."'";
}
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $produkter["katter"] = $stmt->fetchAll(PDO:: FETCH_ASSOC);
        
        echo json_encode($produkter);

        ?>
        
        
        
    </body>
</html>
