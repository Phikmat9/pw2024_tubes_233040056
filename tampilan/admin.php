<?php
session_start();

if(!isset($_SESSION['login'])) {
  header("locatin: ../function/login.php");
  exit;
}

require '../function/functions.php';
$music= query("select * from music order by id desc");

if (isset($_POST["cari"])){
  $music = cari($_POST["keyword"]);
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin My Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="icon" type="icon/x-image" href="../images/logo_default" />
    <script src="https://kit.fontawesome.com/ca43952785.js" crossorigin="anonymous"> </script>
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <header>
      <a href="#" class="logo"> <h1>MyMusic</h1> </a>
      <a href="../function/tambah.php" class="btn btn-prymary">Tambah Daftar music</a>
      <form class="pencarian" action="" method="post">
          <input type="text" name="keyword" size="20" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
          <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
      <a href="../function/logout.php" class="btn btn-prymary">Logout</a>
    </header>

  <div class="container" style="margin-top: 70px; ">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">gambar</th>
      <th scope="col">judul</th>
      <th scope="col">artis</th>
      <th scope="col">album</th>
      <th scope="col">genre</th>
      <th scope="col">durasi</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;
     foreach($music as $msc) :   ?>
    <tr>
      <td><?= $i++?></td>
      <td><img src="../images/<?= $msc['gambar']; ?>" alt="" width="55px"></td>
      <td><?= $msc['judul']; ?></td>
      <td><?= $msc['artis']; ?></td>
      <td><?= $msc['album']; ?></td>
      <td><?= $msc['genre']; ?></td>
      <td><?= $msc['durasi']; ?></td>
      <td>
      <a href="../function/ubah.php?id=<?= $msc['id'];?>"  class="badge text-bg-warning">Ubah</a>
        <a href="../function/hapus.php?id=<?= $msc['id'];?>" onclick="return confirm('yakin?');"><span class="badge text-bg-danger">Hapus</span></a>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
