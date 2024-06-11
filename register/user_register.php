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
<header><a href="login.php" class="logo"> <h1>MyMusic</h1></a></header>
<div class="container">
    <h1 >Login MyMusic</h1>
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
			<label for="password">konfirmasi password :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <a href="user_register.php" class="btn">Tambah user baru!</a>
        </div>
    </form>    
</div>
</body>
</html>