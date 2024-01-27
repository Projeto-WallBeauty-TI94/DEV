<?php 
   $host = "localhost";
   $user = "root";
   $pass = "";
   $bdname = "test";
   $port = "3306";

   try
   {
    $pdo = new
    PDO("mysql:host=$host;port=$port;dbname=".$bdname,$user,$pass);
   }

   catch(PDOException $err)
   {
    echo"Erro no DB".$err->getmessage();
   }
?>