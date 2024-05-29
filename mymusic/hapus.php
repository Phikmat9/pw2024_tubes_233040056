<?php
require 'functions.php';

// cek apakah tombol hapus sudah di klilk atau belum
$id = $_GET['id'];
if (hapus($id) > 0) {
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = 'index.php';
                </script>";
} else {
    echo "data gagal dihapus!";
}