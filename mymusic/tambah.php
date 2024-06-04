<?php
require 'functions.php';
// cek apakah tombol tambah sudah di klilk atau belum
if (isset($_POST['tambah'])) {

    if (tambah($_POST) > 0) {
        echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'admin.php';
    </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <div class="container ">

        <h1>Tambah Data music</h1>
            
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-3">
                <label for="artis" class="form-label">artis</label>
                <input type="text" class="form-control" id="artis" name="artis">
            </div>
            <div class="mb-3">
                <label for="album" class="form-label">album</label>
                <input type="text" class="form-control" id="album" name="album">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">genre</label>
                <input type="text" class="form-control" id="genre" name="genre">
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>

            <button type="submit" name= "tambah">Tambah</button>
        </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>