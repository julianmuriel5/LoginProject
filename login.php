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
     <form action="login.php" method="post">
         <input type="text" name="user"  placeholder="ingresar usuario">
         <input type="password" name="password" placeholder="ingresar contraseña">
         <input type="submit" value="Send">


     </form>
    
</body>
</html>