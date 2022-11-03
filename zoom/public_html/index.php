<?php
//zoomer@localhost IDENTIFIED BY 'b@byz00m3r';
$servername = "localhost";
$username = "zoomer";
$password = "b@byz00m3r";
$db = "laravelphzoom";
try {
   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password, $db);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>
