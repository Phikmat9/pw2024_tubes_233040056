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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <?php if (isset($eror)) : ?>
            <p>Username / Password salah!</p>
        <?php endif; ?>

    <div class="wrapper">
      <form action="">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="username" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox" />Remember me </label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
          <p>Don,t have an acount? <a href="#">Register</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
