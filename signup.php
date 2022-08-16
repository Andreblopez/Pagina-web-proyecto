<?php
    require 'php/conexion.php';

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO usuario (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if($stmt->execute()) {
            $message = 'se creo un nuevo usuario';
            
        }
        else{
            $message = 'sorry ocurrio un error'; 
        }


    }



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookCloud</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

    <body>
    <?php include("./layouts/header.php"); ?>

    <div class="fondo1">

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
        <?php endif; ?>

        <div class="cuent">
        <h1>SignUp</h1>
        <span>or <a href="login.php" class="li">Login</a></span>
        <form action="signup.php" method="post">
            <input type="text" name="usuario" placeholder="Enter your Username">
            <input type="text" name="email" placeholder="Enter your mail">
            <input type="text" name="password" placeholder="Enter your password">
            <input type="text" name="confirm_password" placeholder="Confirm your password">
            <input type="submit" value="send">
        </form>
        </div>
    </div>
    <?php include("./layouts/footer.php"); ?>
</body>
</html>
