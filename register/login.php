<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "hikmat.pandu" && $_POST["password"] == "unpas925") {
        header("Location: admin.php");
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
    <style>
        body {
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
        }

        .container {
            width: 310px;
            height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: gray;
        }

        img {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
        }

        ul form li {
            font-family: "Ceviche One", system-ui;
            margin-bottom: 10px;
            list-style: none;
        }

        h1 {
            font-family: "Ceviche One", system-ui;
            margin-bottom: 20px;
        }

        p {
            color: red;
        }

        button {
            cursor: pointer;
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container">

        <h1>Login Admin</h1>
        <img src="" alt="">

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