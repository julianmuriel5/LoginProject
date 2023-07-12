<?php 
  
 $server = 'localhost' ;
 $username = 'root';
 $password = '';
 $database = 'tecnocut';


    try {
    $conn = new PDO ("mysql:host=$server;dbname=$database;",$username, $password);
    } catch (PDOexception $e) {
      die('connected failed: '.$e->getMessage());
    }
?>

    