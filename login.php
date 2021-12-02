<?php 

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /php-login/profile.php');
    }

    require 'database.php';

    $verify_mail = false;
    $verify_pass = false;

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST[('email')]);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if ($results && $_POST['email'] == $results['email']) {
            if ($results && password_verify($_POST['password'], $results['password'])) {
                $_SESSION['user_id'] = $results['id'];
                header('Location: /php-login/profile.php');
            } else {
                $verify_pass = true;
            }
        } else{
            $verify_mail = true;
        }

        
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/loginphp.css">
    <link rel="icon" href="./img/logo.png" type="image/gif">
    <title>Iniciar Sesión</title>
</head>
<body>

    

    <div id="option__login">
        <div>
            <h1 id="title__login">Iniciar Sesión</h1>
            <a href="signup.php" id="sing__login" ><p id="orsing__login">o Registrate</p></a>
        </div>
    </div>

    <div id="form__login">
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Ingresa tu mail" id="mail__login">
            <input type="password" name="password" placeholder="Ingresa tu contraseña" id="password__login">
            <!-- <input type="checkbox" onclick="showPassword()" id="watchpassword__login"> -->
            <input type="submit" value="Enviar" id="send__login">

            <script src="./assets/js/showpassword.js"></script>

        </form>
    </div>

    <script src="assets/js/spawn-animated.js"></script>

    <?php if ( $verify_mail ) : ?>
        <div class="div__err">
            <p class="err">Correo incorrecto</p>
        </div>
    <?php endif; ?>

    <?php if ( $verify_pass ) : ?>
        <div class="div__err">
            <p class="err">Contraseña incorrecta</p>
        </div>
    <?php endif; ?>

    <style type="text/css">

        .div__err {
            display: flex;
            justify-content: center;
        }

        .err {
            color: #fff;
            background: #ff6961;
            padding: 10px 10px 10px 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ff696199;
            transition: 0.25s;
        }

    </style>

</body>
</html>