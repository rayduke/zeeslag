
<!DOCTYPE HTML>
<html>
    <head>
        <style>
            td{
                width: 40px;
                height: 40px;
            }
            
            .blue {
                background-color: blue;
            }
        </style>
        <script>  
            
        </script>
    </head>
    <body>
    <header>Zeeslag</header>
  
    
    <?php 
    
    
    function createTable(){
    echo "<table>";
   
    for($posx = 0; $posx < 10; $posx++){
            echo "<tr>";
            for($posy = 0; $posy < 10; $posy++){
              echo colors($posx, $posy);
                
              }   echo "</tr>";
    }echo "</td>";
   
     echo "</table>";
    }
    
    echo createTable();
    
    
    function colors($posx, $posy){
    
        $changeColor = "onclick=klik('$posy,$posx')";
    
        return "<td class=blue $changeColor id=vak".$posx."".$posy."></td>";
    
    }
  
    ?>
    
    
    </body>
</html>