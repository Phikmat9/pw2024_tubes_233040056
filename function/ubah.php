<?php

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])){
	header("location: ../tampilan/admin.php");
	exit;
}

// ambil id dari url
$id= $_GET['id'];

// query mahasiswa bedasarkan id
$msc = query("SELECT * FROM music WHERE id = $id");
// cek apakah tombol tambah sudah di klilk atau belum
if (isset($_POST['ubah'])) {

    if (ubah($_POST) > 0) {
        echo "<script>
    alert('data berhasil diubahkan');
    document.location.href = '../tampilan/admin.php';
    </script>";
    } else {
        echo "data gagal diubahkan!";
    }
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="icon" type="icon/x-image" href="../images/logo_default" />
    <script src="https://kit.fontawesome.com/ca43952785.js" crossorigin="anonymous"> </script>
    <link rel="icon" type="icon/x-image" href="../images/logo.jpg" />
    <link rel="stylesheet" href="../tampilan/style.css">
</head>
  <body>
    <h1 style="margin-left: 20px; font-family: 'Shrikhand', cursive; color: var(--color3) ;">
	   Ubah Data music <a href="../tampilan/admin.php" class="btn btn-prymary">Kembali</a></h1>
       <div class="container ">
        <form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?= $msc['id'];?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" size="60" 
				autofocus required value="<?= $msc['judul']; ?>">
            </div>
            <div class="mb-3">
                <label for="artis" class="form-label">Artis</label>
                <input type="text" class="form-control" id="artis" name="artis" size="60"
				required value="<?= $msc['artis']; ?>">
            </div>
            <div class="mb-3">
                <label for="album" class="form-label">Album</label>
                <input type="text" class="form-control" id="album" name="album" size="60"
				required value="<?= $msc['album']; ?>">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" size="60"
				required value="<?= $msc['genre']; ?>">
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi" size="60"
				required value="<?= $msc['durasi']; ?>">
            </div>
            <div class="mb-3">
            <label for="">Foto album (300x300)</label>
                <label for="img" class="album"><i class="fa-solid fa-image"></i>
                    <p>Add cover album</p>
                </label>
                <label for="gambar" class="form-label">gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" size="60"
				required value="../images/<?= $msc['gambar']; ?>">
            </div>

            <button type="submit" name= "ubah" class="btn btn-prymary">ubah</button>
        </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>