<?php
session_start();
include "functions.php";
include "classes.php";
//echo "test 123";
$cor = $_GET['cora'];

?>
<!DOCTYPE HTML
    
<html>
    <head>
        <link rel="stylesheet" media="all" href="style.css"/>
    </head>
    <body>

<?php





echo $cor;
echo "<br>";
echo print_r($_SESSION['allships']);

if(in_array($cor, $_SESSION['allships'])){
    echo '<div id="hit"><img src="imgs/boom.gif" id="boom"></div><audio autoplay><source src="sounds/boom.mp3"></audio>';
}else {
    echo '<div id="miss"></div><audio autoplay><source src="sounds/splash.mp3"></audio>';
}

//if(in_array($cor, $submarine->cord)){
//    echo '<div id="hit"></div>';
//}else {
//    echo '<div id="miss"></div>';
//}
//
//if(in_array($cor, $cruiser->cord)){
//    echo '<div id="hit"></div>';
//}else {
//    echo '<div id="miss"></div>';
//}
//
//if(in_array($cor, $battleship->cord)){
//    echo '<div id="hit"></div>';
//}else {
//    echo '<div id="miss"></div>';
//}
//
//if(in_array($cor, $carrier->cord)){
//    echo '<div id="hit"></div>';
//}else {
//    echo '<div id="miss"></div>';
//}

//foreach ($allShips as $shipArray){     
//    if(in_array($cor, $shipArray)){ 
//        echo '<div id="hit"></div>';
//    }else {
//        echo '<div id="miss"></div>';
//    }
//}


?>
    </body>
</html>