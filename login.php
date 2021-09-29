<?php 


session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /index.php');
}
   
   require 'conexionBD.php';

 if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /index.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:ital@1&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
         <a href="index.php">Sistema de remitos</a>
    </header>

    <h1>Login</h1>

    <span>o <a href="crearuser.php">Registrarse</a></span>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

     <form action="login.php" method="post">
         <input type="text" name="user"  placeholder="ingresar usuario">
         <input type="password" name="password" placeholder="ingresar contraseña">
         <input type="submit" value="Send">


     </form>
    
</body>
</html>