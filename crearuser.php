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

    <h1>Crear usuario</h1>
    <span>o <a href="login.php">Login</a></span>

    <form action="crearuser.php" method="post">
         <input type="text" name="user"  placeholder="ingresar usuario">
         <input type="password" name="password" placeholder="ingresar contraseña">
         <input type="password" name="Confirmar Contraseña" placeholder="Confirmar Contraseña">
         <input type="submit" value="Send">

</body>
</html>