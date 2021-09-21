<?php 
  
 $server = 'localhost' ;
 $username = 'root';
 $password = '';
 $database = 'php_login_database';


    try {
    $conn = new PDO ("mysql:host=$sever;dbname=$database;",$username, $password);
    } catch (PDOexception $e) {
      die('connect failed: '.$e->getMessage());
    }
?>

