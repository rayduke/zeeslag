<html>
    <head>
        <style>
            td{
                width: 40px;
                height: 40px;
            }
            .blauw{
                background-color: grey;
            }
            .navy{
                
                background-color: grey;
            }
            div{
                margin:auto;
                width:30px;
                height: 30px;
            }
            .steenrood{
                border-radius : 100%;
                background-color:red;
            }
            .steenblauw{
                border-radius : 100%;
                background-color:blue;
            }
        </style>
        <script>
                function klik(a,b){
                var cordinaat = a.value;    
                    
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {                   
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("vakje"+a+""+b).innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "boot.php?coordinaata="+a.value, true);
                xhttp.send();
//                dt.onclick = change;
//           }
//           function change();

        </script>
    </head>
    <body>
                <a href="nieuw.php">nieuw</a>
        <p>testetsetset</p>
<?php


tabelmaken();
$_SESSION['speelveld'] = $speelveld;
function zetverwerken($startklik, $eindklik){
    global $speelveld;
    $speelveld[$eindklik[0]][$eindklik[1]] = $speelveld[$startklik[0]][$startklik[1]];
    $speelveld[$startklik[0]][$startklik[1]] = 0;
    
    
}
function tabelmaken(){
    $hb = 10;
    echo "<table>";
    for($x=0;$x<$hb;$x++){
        echo "<tr>";
        for($y=0; $y<$hb;$y++){
            if($x % 2){
                echo bepaalkleur($y,$x);
            }else{
                echo bepaalkleur($y,$x,true);
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
function bepaalkleur($positiey,$positiex, $omgekeerd = false){
    
    $achtergrond = $positiey;
    if($omgekeerd){
        $achtergrond = $positiey + 1;
    }
    $extrainfo = "onclick=klik($positiex,$positiey)";
    if($achtergrond % 2 == 2){
        return "<td class=blauw  $extrainfo id=vakje".$positiex."".$positiey."></td>";
    }else{
        return "<td class=navy $extrainfo id=vakje".$positiex."".$positiey."><div id=steen".$positiex."".$positiey." class=".bepaalsteen($positiex,$positiey)."></div></td>\n";
    }
}
function bepaalsteen($x, $y){
    global $speelveld;
    switch($speelveld[$x][$y]){
        case 1:
            return "steenblauw";
        case 2:
            return "steenrood";
        default:
            return "";
    }
}
?>
    </body>
</html>