<?php 
  
 $server = 'localhost' ;
 $username = 'root';
 $password = '';
 $database = 'tecnocut';


    try {
    $conn = new PDO ("mysql:host=$server;$database=tecnocut;",$username, $password);
    } catch (PDOexception $e) {
      die('connect failed: '.$e->getMessage());
    }
?>

    