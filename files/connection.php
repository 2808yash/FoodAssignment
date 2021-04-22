  
<?php
    $servername = "remotemysql.com";
  $username = "q7uleFYUor";
  $password = "gLKU2b6inN";
  $dbname = "q7uleFYUor";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>