<?php
require '../function/functions.php';
$music = query("select * from music order by id desc");

if (isset($_POST["cari"])){
  $music = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user My Music</title>
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
      <div class="menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></div>
      <nav id="nav-menu">
          <form class="pencarian" action="" method="post">
              <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
              <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          <a href="../register/logout.php" class="btn btn-prymary">Logout</a>
      </nav>
  </header>

  <div class="container">
    <main>
      <?php $i = 1;
            foreach ($music as $msc) : ?>
      <div class="lagu">
        <div class="cover">
          <img src="../images/<?= $msc['gambar'] ?>" class="cover-album" />
        </div>
        <div class="judul">
          <h5><?= $msc['judul']; ?></h5>
          <p><?= $msc['genre']; ?></p>
          <a href="detail_music.php?id=<?= $msc['id']; ?>" class="fa-solid fa-play"></a>
        </div>
      </div>
      <?php endforeach; ?>
    </main>
  </div>
    
  <footer>
    <div class="pagination">
      <a href="#" class="fa-solid fa-angle-left"></a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">...</a>
      <a href="#" class="fa-solid fa-angle-right"></a>
    </div>
  </footer>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
      document.getElementById('nav-menu').classList.toggle('active');
    });
  </script>
</body>
</html>
