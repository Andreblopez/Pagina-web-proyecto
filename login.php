
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
            <h1>Login</h1>
            <span>or <a href="signup.php" class="li">SignUp</a></span>
            <form action="signup.php" method="post">
            
                <input type="text" name="email" placeholder="Enter your mail">
                <input type="text" name="password" placeholder="Enter your password">
                
                <input type="submit" value="send">
            </form>
            </div>
    </div>
    <?php include("./layouts/footer.php"); ?>
</body>
</html>
