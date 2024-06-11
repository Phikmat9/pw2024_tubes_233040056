<?php
session_start();
require 'function-user.php';

// ketika tombol login ditekan
if (isset($_POST["login"])) {
    $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MyMusic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
    <script src="https://kit.fontawesome.com/ca43952785.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>MyMusic</h1></header>
<div class="container">
    <h1>Login MyMusic</h1>
    <?php if (isset($login['error'])) : ?>
        <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="post" class="data-input">
        <div class="form-group">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" autofocus autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <div class="form-group">
            <a href="user_register.php" class="btn">Tambah user baru!</a>
        </div>
    </form>    
</div>
</body>
</html>
