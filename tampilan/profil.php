<?php
require '../mymusic/functions.php';
$music = query("select * from music order by id desc");

if (isset($_POST["cari"])){
  $music = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>percobaan tampilan</title>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/ca43952785.js"
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
  </head>

  <body>
    <header>
      <a href="#" class="logo"> <h1>MyMusic</h1> </a>
      <form class="pencarian" action="" method="post">
          <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
          <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </header>
   
    <main>
      <?php $i = 1;
            foreach ($music as $msc) : ?>
      <div class="lagu">
        <div class="cover">
          <img src="../images/<?= $msc['gambar'] ?>" class="cover-album" />
        </div>
        <div class="judul">
          <h3><?= $msc['judul']; ?></h3>
          <span> <?= $msc['artis']; ?></span>

          <p>
            <?= $msc['album']; ?><br>
            <?= $msc['genre']; ?><br>
            <?= $msc['durasi']; ?>
          </p>

          <a href="<?= $msc['id']; ?>" class="fa-solid fa-play"></a>
        </div>
      </div>
      <?php endforeach; ?>
    </main>

    
    <div class="pagination">
      <a href="#" class="fa-solid fa-angle-left"></a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">...</a>
      <a href="#" class="fa-solid fa-angle-right"></a>
    </div>
  </body>
</html>
