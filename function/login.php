<?php
session_start();

if(isset($_SESSION['login'])) {
    header("location: ../tampilan/user.php");
    exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
    $login = login($_POST);
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
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
    <link rel="stylesheet" href="../register/style.css">
</head>
<body>
    <h1>From Login</h1>
    <?php if (isset($login['error'])) : ?>
            <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
        <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    username:
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>
            <li>
                <label>
                    Password:
                    <input type="password" name="password">
                </label>
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>
</html>