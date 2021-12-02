<?php 
    require 'database.php';

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /php-login/profile.php');
    }

    $message = "";
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username',$_POST['username']);
        $stmt->bindParam(':email',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password',$password);

        if($stmt->execute()) {
            $message = 'Nuevo usuario creado correctamente';
        } else {
            $message = 'Oh... Ha ocurrido un error creando su contraseña';
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/signupphp.css">
    <link rel="icon" href="./img/logo.png" type="image/gif">
    <title>Registro</title>
</head>
<body>  
    <div id="option__signup">
        <div>
            <h1 id="title__signup">Registrate</h1>
            <a href="login.php" id="sing__signup" ><p id="orsing__signup">o Inicia Sesión</p></a>
        </div>
    </div>

    <div id="form__signup">
        <form action="signup.php" method="post">
            <input type="text" name="username" placeholder="Nombre de usuario" id="username__signup">
            <input type="email" name="email" placeholder="Correo electronico" id="mail__signup">
            <input type="password" name="password" placeholder="Contraseña" id="password__signup">
            <input type="password" name="confirm_password" placeholder="Confirma tu contraseña" id="confirmpassword__signup">
            <input type="submit" value="Enviar" id="send__signup">
        </form>
    </div>

    <?php if(!empty($message)): ?>
        <div class="newuser__div">
            <p class="new__user"><?= $message ?></p>
        </div>
    <?php endif; ?>

    <style type="text/css">

        .newuser__div {
            display: flex;
            justify-content: center;
        }

        .new__user {
            color: #fff;
            background: #77DD77;
            padding: 10px 10px 10px 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #77DD7799;
            transition: 0.25s;
        }

    </style>

</body>
</html>
