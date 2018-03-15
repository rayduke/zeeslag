<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" media="all" href="style.css"/>
    </head>
    <body>


<?php
include "classes.php";
//echo "test 123";
$cor = $_GET['cora'];



if($cor == "00" || $cor == "10"){
    echo '<div id="hit">TEST</div>';
}else {
    echo '<div id="miss">TESTMISS</div>';

}
//var_dump($cor);



?>
</body>
</html>
<?php
// als value boot is dan kleur rood. als niks is kleur blauw. on:hover oranje

//zelf tabel de value geven. 


// steen wordt boot.

//id = vakje



//-------class boot--------------------------------------//
//class boot
//onderverdelen in subklasses
//namen boot:
//vliegdekschip = 5 vakjes
// slagschip = 4vakjes
// onderzeeër = 3 vakjes
// torpedoboot = 3vakjes
// partrouilleschip = 2vakjes



//---------------abstrac--CLASS SPEL----------------------------//
//
//--------class startspel----//
// class spel
// class startspel aanmaken
// 
// spel kan niet beginnen tenzij er 17 vakjes een boot zijn.
//classes voor de boten maken en eigenschappen geven. methodes geven bijv: ontploffen als alle vakjes zijn geraakt.
//Boot moet geplaatst kunnen worden en niet verplaatst kunnen worden. in een rechte rij.
//  boot = Rood
// gezonken boot = donker rood
// 0 is niks = navy
//1 is water = blauw
//2 is schip = rood

//methode doorgeven status doorgeven aan beide kanten.
//Onthouden in een SESSION hoeveel keer hij geraakt is.

// 2 schermen maken.


//--------------class legenda----------------//
// status/ legenda van het spel: aantal hits, of hoeveel er nog over is.
// totaal punten bijhouden , als alles geraakt is. spel geëindigd.

// database aanmaken , database moet vertellen updaten wat er gedaan is.
// extra misschien multiplayer maken.                         


//echo "hij is raak"; 
