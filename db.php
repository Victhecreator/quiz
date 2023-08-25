
<?php

      $serverName = 'localhost';
      $dbName = 'quiz';
      $dbUser = 'root';
      $dbpassword = 'qwertyuiop';
  
      try {
          
          $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $dbUser, $dbpassword);
          
          
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          //echo "Data saved successfully";
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
  
   
?>
