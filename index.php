<?php
  session_start();

  require 'conexionBD.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
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
    <header>
         <a href="index.php">Sistema de remitos</a>
    </header>

    <?php if(!empty($user)): ?>
      <br> Bienvenido <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
        <h1>Bienvenido</h1>
      <h2>Por favor regristrarse o ingresar</h2>

      <a href="login.php">Ingresar</a> o
      <a href="crearuser.php">Registrarse</a>
    <?php endif; ?>
  </body>
</html>