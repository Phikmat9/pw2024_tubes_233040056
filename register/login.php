<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "hikmat.pandu" && $_POST["password"] == "unpas925") 
        header("Location: ../tampilan/admin.php ");
    
    if ($_POST["username"] == "pandu.raharja" && $_POST["password"] == "hikmat925") {
        header("Location: ../tampilan/user.php ");
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
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            background-color: #552084;
        }
        h1{
            color: #fdba21;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login MyMusic</h1>

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
                    <button type="submit" name="reter">Reister</button>
                </li>
            </form>
        </ul>

    </div>
</body>
</html>