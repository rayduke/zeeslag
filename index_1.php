<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$db = "zeeslag";

$conn = new mysqli($servername, $username, $password, $db);


?>
<!DOCTYPE HTML>
<html>
    <head>
        <script>       
        </script>
    </head>
    <body>
        <?php 
        
        function downloaden($conn){
        $sql = "SELECT * FROM schepen";
        $result = $conn->query($sql);

             if ($result->num_rows > 0) {
            // output data of each row
               while($row = $result->fetch_assoc()) {
                echo "id:" .$row['id']. "shipname: " . $row["scheepsnaam"]. " - Geschiedenis: " . $row["history"]. " " . $row["kenmerk"]. "<br>" ;       

                }
            }
        }
             
         echo downloaden($conn);
      
        function updaten($conn){
                      
            $var1 = $_POST['shipname'];
            $var2 = $_POST['history'];
            $var3 = $_POST['kenmerk'];
          
            
            $sql = "INSERT INTO schepen (scheepsnaam, history, kenmerk) VALUE ('$var1','$var2','$var3')";
            $conn->query($sql);
            
        }
        
            if(isset($_POST['submit'])){
            
            echo updaten($conn);
            
           
        }
        
        
        ?>
   
        <form method="post" action="index.php" name="form">

          <span>scheepsnaam:</span><input type="text" name="shipname" value=""> 
          <span>history:</span><input type="text" name="history" value="">
          <span>kenmerk:</span><input type="text" name="kenmerk" value="">
          <input type=submit name="submit" value=versturen>

        </form>
    </body>
    

</html>