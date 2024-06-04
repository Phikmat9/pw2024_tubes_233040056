<?php

require "functions.php";
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
   
  </head>
  <body>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>MyMusic</h1></a>
    <form action="" method="post">
      <input type="text" name="keyword" size="40" autofocus
      placeholder="masukkan keyword pencarian.." autocomplete="off">
      <button type="submit" name="cari">Cari!</button>
    </form>
    </div>
  </div>
  </nav>
</header>

  <div class="container">
        <a href="tambah.php" class="btn btn-primary">Tambah Daftar music</a>

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
      <td><?= $msc['gambar']; ?></td>
      <td><?= $msc['judul']; ?></td>
      <td><?= $msc['artis']; ?></td>
      <td><?= $msc['album']; ?></td>
      <td><?= $msc['genre']; ?></td>
      <td><?= $msc['durasi']; ?></td>
      <td>
        <a href="ubah.php?id=<?= $msc['id'];?>"  class="badge text-bg-warning">Ubah</a>
        <a href="hapus.php?id=<?= $msc["id"];?>" onclick="return confirm('yakin?');"><span class="badge text-bg-danger">Hapus</span></a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
