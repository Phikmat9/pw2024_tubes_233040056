<?php 
require 'functions.php';

$id = $_GET['id'];
$msc = query("SELECT * FROM music WHERE id= $id") [0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert ('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ubah data music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <div class="container ">

        <h1>Ubah Data Music</h1>
            
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $msc["id"]; ?>">

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $msc["judul"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="artis" class="form-label">Artis</label>
                <input type="text" class="form-control" id="artis" name="artis" value="<?= $msc["artis"]; ?>">
            </div>
            <div class="mb-3">
                <label for="album" class="form-label">Album</label>
                <input type="text" class="form-control" id="album" name="album" value="<?= $msc["album"]; ?>">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="<?= $msc["genre"]; ?>">
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi" value="<?= $msc["durasi"]; ?>">
            </div>
            

            <button type="submit" name= "ubah">Ubah</button>
        </form>


    </div>


    