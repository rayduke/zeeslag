<?php
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
        
        function updaten($conn){
            
            
            
            $var1 = $_POST['shipname'];
            $var2 = $_POST['history'];
            $var3 = $_POST['kenmerk'];
          
            
            $sql = "INSERT INTO schepen (scheepsnaam, history, kenmerk) VALUE ('$var1','$var2','$var3')";
            $conn->query($sql);
            
           
            
            
            

//          
//            
//            $var1 = $_POST['history'];
//            $sql1 = "INSERT INTO history (history) VALUE ('".$var1."')";
//            $conn->query($sql1);
//                        
//            $var2 = $_POST['kenmerk'];
//            $sql2 = "INSERT INTO kenmerk (kenmerk) VALUE ('".$var2."')";
//            $conn->query($sql2);
            
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