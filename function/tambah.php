<?php

include 'functions.php';
// cek apakah tombol tambah sudah di klilk atau belum
if (isset($_POST['tambah'])) {

    if (tambah($_POST) > 0 ) {
        echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = '../tampilan/admin.php';
    </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = '../tampilan/admin.php';
        </script>";
    }
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah data music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="icon" type="icon/x-image" href="../images/logo_default" />
    <script src="https://kit.fontawesome.com/ca43952785.js" crossorigin="anonymous"> </script>
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
    <link rel="stylesheet" href="../tampilan/style.css">
</head>
  <body>
    <header>
        <h1 style="margin-left: 20px; font-family: 'Shrikhand', cursive; color: var(--color3) ;">
        Tambah Data music <a href="../tampilan/admin.php" class="btn btn-prymary">Kembali</a></h1> 
    </header>
    
    <div class="container ">     
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" autofocus required>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" autofocus required>
            </div>
            <div class="mb-3">
                <label for="artis" class="form-label">Artis</label>
                <input type="text" class="form-control" id="artis" name="artis" required>
            </div>
            <div class="mb-3">
                <label for="album" class="form-label">Album</label>
                <input type="text" class="form-control" id="album" name="album" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi" required>
            </div>
            <div class="mb-3">
            <label for="">Foto album (300x300)</label>
                <label for="gambar" class="from-label"><i class="fa-solid fa-image"></i>
                    <p>Add cover album</p>
                </label>
                <label for="gambar" class="form-label">gambar</label>
                <input type="file" name="gambar" class="form-label" id="gambar" required>
            </div>

            <button type="submit" name= "tambah" class="btn btn-prymary">Tambah</button>
        </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>