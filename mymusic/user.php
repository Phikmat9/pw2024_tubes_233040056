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
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <style>
      body {
        background-color: #6634c8;
        color: #fff;
        font-family: "Arial", sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        margin: 0;
      }

      header {
        width: 100%;
        margin-bottom: 20px;
      }

      .navbar {
        background: linear-gradient(45deg, #502b9c, #6634c8); 
        padding: 15px;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .navbar-brand h1 {
        color: #ffde59;
        font-size: 24px;
        margin: 0;
        font-family: 'Shrikhand', cursive; 
      }

      .navbar form {
        display: flex;
        align-items: center;
      }

      .navbar input[type="text"] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        margin-right: 10px;
        font-size: 14px;
      }

      .navbar button[type="submit"] {
        background-color: #ff9900;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
      }

      .navbar button[type="submit"]:hover {
        background-color: #cc7a00;
      }

      .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        max-width: 1200px;
        width: 100%;
      }

      .card {
        background-color: #333;
        color: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        width: 100%;
        max-width: 250px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 30px rgba(255, 255, 255, 0.6), 0 0 40px rgba(255, 255, 255, 0.4);
      }

      .card-img-top {
        border-radius: 15px;
        height: 150px;
        object-fit: cover;
      }

      .card-title {
        font-size: 18px;
        margin-top: 15px;
      }

      .card-text h4 {
        font-size: 14px;
        color: #6634c8;
        margin: 5px 0;
      }

      .card-text {
        margin: 5px 0;
      }

      .btn-primary {
        background-color: #6634c8;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #502b9c;
      }

      .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
      }

      .pagination a {
        color: #fff;
        padding: 10px 10px;
        margin: 0 5px;
        text-decoration: none;
        background-color: #502b9c;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      .pagination a:hover {
        background-color: #6634c8;
      }

      .fa-angle-left,
      .fa-angle-right {
        font-size: 20px;
      }

      @media (max-width: 768px) {
        .navbar-brand h1 {
          font-size: 20px;
        }

        .navbar input[type="text"] {
          width: 150px;
        }

        .navbar button[type="submit"] {
          padding: 8px 15px;
          font-size: 12px;
        }

        .card-title {
          font-size: 16px;
        }

        .card-text h4, .card-text {
          font-size: 12px;
        }

        .btn-primary {
          padding: 8px 15px;
          font-size: 12px;
        }

        .pagination a {
          padding: 8px 10px;
          font-size: 12px;
        }
      }

      @media (max-width: 576px) {
        .navbar-brand h1 {
          font-size: 18px;
        }

        .navbar input[type="text"] {
          width: 120px;
        }

        .card-title {
          font-size: 14px;
        }

        .card-text h4, .card-text {
          font-size: 10px;
        }

        .btn-primary {
          padding: 6px 10px;
          font-size: 10px;
        }

        .pagination a {
          padding: 6px 8px;
          font-size: 10px;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img src="../images/logo.jpg" width="55px" alt="">
          <a class="navbar-brand" href="#"><h1>MyMusic</h1></a>
          <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
            <button type="submit" name="cari">Cari!</button>
          </form>
        </div>
      </nav>
    </header>

    <div class="container mt-4">
      <div class="row card-container">
        <?php $i = 1;
        foreach ($music as $msc) : ?>
          <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
            <div class="card mb-4">
              <img src="../images/<?= $msc['gambar']; ?>" class="card-img-top">
              <h4 class="card-title"><?= $msc['judul']; ?></h4>
              <p class="card-text">
                <?= $msc['artis']; ?>
                <?= $msc['album']; ?>
                <?= $msc['genre']; ?>
                <?= $msc['durasi']; ?>
              </p>
              <a href="#" class="btn btn-primary">Download</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="pagination">
      <a href="#" class="fa-solid fa-angle-left"><</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">...</a>
      <a href="#" class="fa-solid fa-angle-right">></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
