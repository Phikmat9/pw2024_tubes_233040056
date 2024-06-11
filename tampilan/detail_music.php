<?php 

require '../function/functions.php';

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca43952785.js" crossorigin="anonymous"></script>
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
    <link rel="stylesheet" href="style_detail-music.css" />
  </head>

  <body>
  <header>
      <a href="user.php" class="logo"> <h1>MyMusic</h1> </a>
      <form class="pencarian" action="" method="post">
          <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
          <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
      <a href='../register/logout.php' class="btn btn-prymary">Logout</a>
    </header>

    <div class="bg-cover" style="background-image: url(<?= $msc['gambar'] ?>);">
            <div class="cover-lirik">
                <img src="../images/<?= $msc['gambar'] ?>" width="300px" >
                <div class="judul-lagu">
                    <h1><?= $msc['judul']; ?></h1>
                    <p>
                      <?= $msc['artis']; ?><br>
                      
                    </p>
                    <div class="music-play">
                        <div class="waktu">
                            <span>00:00</span>
                            <div class="range-music">
                                <input type="range" name="" id="">
                            </div>
                            <span>00:00</span>
                        </div>
                        <div class="play">
                            <i class="fa-solid fa-backward-step"></i>
                            <i class="fa-solid fa-circle-play"></i>
                            <i class="fa-solid fa-forward-step"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="lirik">
            <div class="lirik-lagu">
                <h3>Lirik Lagu</h3>
                <br>
                
                    lirik lagu belum ditambahkan
                
                
            </div>
        </section>
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
