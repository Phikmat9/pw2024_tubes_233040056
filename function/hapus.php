<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])){
	header("location: ../tampilan/admin.php");
	exit;
}

// cek apakah tombol hapus sudah di klilk atau belum
$id = $_GET['id'];
if (hapus($id) > 0) {
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = '../tampilan/admin.php';
                </script>";
} else {
    echo "data gagal dihapus!";
}