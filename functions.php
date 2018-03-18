<?php

    function nr_to_char($nr){
            // converts number to character.
            $nr = $nr + 65;
            echo chr($nr); 
        }
    
    function createTable(){
   
        echo "<table>";

        for($posx = 0; $posx < 10; $posx++){
                echo "<tr>";
                for($posy = 0; $posy < 10; $posy++){
                  echo colors($posx, nr_to_char($posy));

                } echo "</tr>";
        } 
    }   echo "</table>";
    
   
    
    
    function colors($posy,$posx){
    
            $extrainfo = "onclick=klik($posx,$posy)";
           
            
  
                echo "<td class=navy $extrainfo id=vak".$posx."".$posy."></td>";
                

                
    }
    
    
    
    function checkboat(){
        
    }

    