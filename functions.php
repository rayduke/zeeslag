<?php


    function createTable(){
        echo "<table>";

        for($posx = 0; $posx < 10; $posx++){
                echo "<tr>";
                for($posy = 0; $posy < 10; $posy++){
                  echo colors($posx, $posy);

                } echo "</tr>";
        } 
    }   echo "</table>";
    
   
    
    
    function colors($posy,$posx){
    
            $extrainfo = "onclick=klik($posx,$posy)";
           
            
  
                echo "<td class=navy $extrainfo id=vak".$posx."".$posy."></td>";
                

                
    }

    