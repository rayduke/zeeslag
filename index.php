<?php
include "functions.php";
include "classes.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" media="all" href="style.css"/>
    <style>
            
    </style>
    <script>  
        function klik(a,b) {
          
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("vak"+a+""+b).innerHTML =
                    xhttp.responseText;
                    } 
//                    var elem = document.getElementsByTagName('html');            
//                    console.dir(elem);
            };
                  xhttp.open("GET", "boot.php?cora="+a+b, true);
//              
                  xhttp.send();
        }
    </script>
</head>
<body>
   
<h1>Zeeslwag</h1>

   

    <?php 

    
    createTable();
    
    
    echo "ETSETSETSETSETSETSE" ;
    ?>
<?php
echo "DIT IS EEN TEST:";
        ?>
</body>
    
</html>