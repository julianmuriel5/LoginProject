<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO ingreso ( email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito';
    } else {
      $message = 'Lo sentimos, ocurrio un error al crear su usuario.';
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:ital@1&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
     

 </head>
 <body>

 <?php require 'partials/header.php' ?>
     
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?> 

    <h1>Crear usuario</h1>
    <span>o <a href="signup.php">Ingresar</a></span>

    <form action="signup.php" method="post">
    <input type="text" name="email"  placeholder="ingresar usuario">
         <input type="password" name="password" placeholder="ingresar contraseña">
         <input type="password" name="Confirmar Contraseña" placeholder="Confirmar Contraseña">
         <input type="submit" value="Confirmar">

 </body>
</html>