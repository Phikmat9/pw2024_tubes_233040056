<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "hikmat.pandu" && $_POST["password"] == "unpas925") 
        header("Location: ../mymusic/admin.php ");
    
    if ($_POST["username"] == "pandu.raharja" && $_POST["password"] == "hikmat925") {
        header("Location: ../mymusic/user.php ");
        exit;
    } else {
        $eror = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register_style.css">
</head>
<body>
    <div class="container">

        <h1>Login Admin</h1>
        <img src="../images/logo.jpg" alt="">

        <?php if (isset($eror)) : ?>
            <p>Username / Password salah!</p>
        <?php endif; ?>

        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="submit">Login</button>
                </li>
            </form>
        </ul>
    </div>

</body>

</html>