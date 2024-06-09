<?php

use LDAP\Result;

function koneksi(){
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040056') or die ('koneksi ke db gagal');
    return $db;
}

function query($sql){
$conn = koneksi();


$result = mysqli_query($conn, $sql);

// jika hanya satu data
if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
}

$rows = [];
while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
}

return $rows;
}


function upload()
{
    $namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../images/' . $namaFileBaru);

	return $namaFileBaru;

   
}


function tambah ($data)
{
    $conn = koneksi();

    
    $judul =  htmlspecialchars ($data['judul']);
    $artis =  htmlspecialchars ($data['artis']);
    $album =  htmlspecialchars ($data['album']);
    $genre =  htmlspecialchars ($data['genre']);
    $durasi =  htmlspecialchars ($data['durasi']);
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    $sql = "INSERT INTO music
            VALUES (null, '$gambar', '$judul', '$artis', '$album', '$genre','$durasi')
    ";

    mysqli_query($conn, $sql) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM music WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah ($data)
{
    $conn = koneksi();

    $id =  htmlspecialchars ($data['id']);
    $gambarLama =  htmlspecialchars ($data['$gambarLama']);
    $judul =  htmlspecialchars ($data['judul']);
    $artis =  htmlspecialchars ($data['artis']);
    $album =  htmlspecialchars ($data['album']);
    $genre =  htmlspecialchars ($data['genre']);
    $durasi =  htmlspecialchars ($data['durasi']);

    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE music SET
                gambar = '$gambar',
                judul = '$judul',
                artis = '$artis',
                album = '$album',
                genre = '$genre',
                durasi = '$durasi'
            WHERE id = $id
                ";

    mysqli_query($conn, $query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM music
                WHERE
                judul like '%$keyword%' OR
                artis like '%$keyword%' OR
                album like '%$keyword%' OR
                genre like '%$keyword%' 
                ";
    return query($query);
}


?>