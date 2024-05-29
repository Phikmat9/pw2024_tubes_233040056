<?php
require 'functions.php';
// cek apakah tombol tambah sudah di klilk atau belum

$id = $_GET['id'];
$msc = query("SELECT * FROM music WHERE id = $id")[0];

if (isset($_POST['ubah'])) {

    if (ubah($_POST) > 0) {
        echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
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
    <title>ubah data music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Ubah Data music</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $msc['id']; ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required value="<?= $msc['judul']; ?>">
            </div>

            <div class="mb-3">
                <label for="artis" class="form-label">artis</label>
                <input type="text" class="form-control" id="artis" name="artis" required value="<?= $msc['artis']; ?>">
            </div>

            <div class="mb-3">
                <label for="album" class="form-label">album</label>
                <input type="text" class="form-control" id="album" name="album" required value="<?= $msc['album']; ?>">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required value="<?= $msc['genre']; ?>">
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">durasi</label>
                <input type="text" class="form-control" id="durasi" name="durasi" required value="<?= $msc['durasi']; ?>">
            </div>
            <button type="submit" name="ubah" class="btn btn-primary">ubah</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>