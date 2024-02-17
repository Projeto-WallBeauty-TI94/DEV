<?php 
// ini_set('session.gc_maxlifetime', 86400);


   $host = "localhost";
   $user = "root";
   $pass = "";
   $bdname = "db_projeto";
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