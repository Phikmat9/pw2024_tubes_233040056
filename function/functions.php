<?php

// koneksi ke database
function koneksi(){
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040056') or die ('koneksi ke db gagal');
    return $db;
}

function query($sql){

// koneksi database
$conn = koneksi();

// uery untuk mengambil data
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

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

// tambah data
function tambah($data)
{
    $conn = koneksi();
    // cek apakah data berhasil di tambahkan atau tidak
    // $gambar =  htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $artis =  htmlspecialchars($data['artis']);
    $album =  htmlspecialchars($data['album']);
    $genre =  htmlspecialchars($data['genre']);
    $durasi =  htmlspecialchars($data['durasi']);
    


    $sql = "INSERT INTO music VALUES
            (null, '$judul', '$artis', '$album', '$genre', '$durasi')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

// function upload
function upload() {

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
	if( $ukuranFile > 5000000 ) {
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


// delet data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM music WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// ubah data
function ubah ($data)
{
    $conn = koneksi();

    $id_music= htmlspecialchars($data['id_music']);
    $judul =  htmlspecialchars ($data['judul']);
    $artis =  htmlspecialchars ($data['artis']);
    $album =  htmlspecialchars ($data['album']);
    $genre =  htmlspecialchars ($data['genre']);
    $durasi =  htmlspecialchars ($data['durasi']);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
	
	// cek apakah user pilih gambar baru atau tidak
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
    
    $query = "UPDATE music SET
                judul = '$judul',
                artis = '$artis',
                album = '$album',
                genre = '$genre',
                durasi = '$durasi',
                gambar = '$gambar'
            WHERE id_music = $id_music";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    echo mysqli_error($conn);
    
    return mysqli_affected_rows($conn);
}

// cari data
function cari($keyword){

    $conn = koneksi();

    $query = "SELECT * FROM music
                WHERE
                judul like '%$keyword%' OR
                artis like '%$keyword%' OR
                album like '%$keyword%' OR
                genre like '%$keyword%' 
                ";
    $result = mysqli_query($conn, $query);

    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}






?>