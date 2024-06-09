<?php 
require '../mymusic/functions.php';

$id = $_GET['id'];

$msc = query("SELECT * FROM music WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>detail music</title>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/ca43952785.js"
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style_detail-music.css" />
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
  </head>

  <body>
    
    <main>
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

          <a href="" class="fa-solid fa-play"></a>
        </div>
      </div>
    </main>
