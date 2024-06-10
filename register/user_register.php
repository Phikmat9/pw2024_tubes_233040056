<?php
require 'function-user.php';
// cek apakah tombol tambah sudah di klilk atau belum
if (isset($_POST['tambah'])) {

    if (tambah($_POST) > 0 ) {
        echo "<script>
    alert('User berhasil ditambahkan');
    </script>";
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register user mymusic</title>
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
        <h1>Register User MyMusic</h1>

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
                    <button type="submit" name="reter">Reister</button>
                </li>
            </form>
        </ul>

    </div>
</body>
</html>