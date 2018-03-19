<?php
//HIER WAT ANDERS
//NOG MEER GEDOE
include "functions.php";
include "classes.php";
//COMMENTAAR VAN FELIX`
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
     
     
      function send_name(){
           var name1 = document.getElementById("speler1").value;
           var name2 = document.getElementById("speler2").value;
           var destroyer = document.getElementById("codestroyer").value;
           var submarine = document.getElementById("cosubmarine").value;
           var cruiser = document.getElementById("cocruiser").value;
           var battleship = document.getElementById("cobattleship").value;
           var carrier = document.getElementById("cocarrier").value;
         
          document.location = "index.php?name1="+name1+"&name2="+name2+"&codestroyer="+destroyer+"&cosubmarine="
                  +submarine+"&cocruiser="+cruiser+"&cobattleship="+battleship+"&cocarrier="+carrier;
         
      }
  </script>
</head>
<body>
<h1>Zeeslag</h1>


  <?php
  createTable();
 
 
  if(isset($_GET['name1']) && isset($_GET['name2'])){
         $name1 = $_GET['name1'];
         $name2 =  $_GET['name2'];
         echo "Hee ".$name1."! Je speelt tegen ".$name2."<br>";

  }

  ?>
<span>Speler1: </span><input type=text id=speler1 placeholder="Vul je naam in"><br>
<span>Speler2: </span><input type=text id=speler2 placeholder="Vul je naam in">
<br>
<span>----------------------------------------------------------------------- </span>
<br>
<span>Destroyer (2): </span><input type=text id=codestroyer placeholder="Vul de twee coördinaten in"><br>
<span>Submarine (3): </span><input type=text id=cosubmarine placeholder="Vul de drie coördinaten in"><br>
<span>Cruiser (3): </span><input type=text id=cocruiser placeholder="Vul de drie coördinaten in"><br>
<span>Battleship (4)</span><input type=text id=cobattleship placeholder="Vul de vier coördinaten in"><br>
<span>Carrier (5): </span><input type=text id=cocarrier placeholder="Vul de vijf coördinaten in"><br>

<input type=submit value=submit onclick="send_name()">
</body>
 

</html>
