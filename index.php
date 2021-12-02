<?php 

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /php-login/profile.php');
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/indexphp.css">
    <link rel="icon" href="./img/logo.png" type="image/gif">
    <title>Project Sex</title>
</head>
<body>
    <div id="option__index">
        <a href="login.php" id="login__index">Iniciar sesión</a> <p>o</p> 
        <a href="signup.php" id="register__index">Crear cuenta nueva</a>
    </div>
</body>
</html>