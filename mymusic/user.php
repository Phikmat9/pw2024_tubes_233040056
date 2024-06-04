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
    <title>My Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../tampilan/user_style.css" />
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

<div class="card row">
  <?php $i=1;
  foreach($music as $msc) :  
  ?>
  <div class="card col-md-3" style="width: 18rem;">
    <img src="<?= $msc['gambar']; ?>" class="card-img-top">
      <h5 class="card-title"><?= $msc['judul']; ?></h5>
      <p class="card-text"><h6><?= $msc['artis']; ?></h6></p>
      <p class="card-text"><h6><?= $msc['album']; ?></h6></p>
      <p class="card-text"><?= $msc['genre']; ?></p>
      <p class="card-text"><?= $msc['durasi']; ?></p>
      <a href="#" class="btn btn-primary">Download</a>
  </div>
  <?php endforeach; ?>
</div>

    <div class="pagination">
      <a href="#" class="fa-solid fa-angle-left"></a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">...</a>
      <a href="#" class="fa-solid fa-angle-right"></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
