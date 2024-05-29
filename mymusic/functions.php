<?php
function koneksi(){
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040056') or die ('koneksi ke db gagal');
    return $db;
}

function query($sql){
$conn = koneksi();


$result = mysqli_query($conn, $sql);

$rows = [];
while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
}

return $rows;
}


function tambah ($data)
{
    $conn = koneksi();

    $judul =  htmlspecialchars ($data['judul']);
    $artis =  htmlspecialchars ($data['artis']);
    $album =  htmlspecialchars ($data['album']);
    $genre =  htmlspecialchars ($data['genre']);
    $durasi =  htmlspecialchars ($data['durasi']);

    $sql = "INSERT INTO music
            VALUES (null, '$judul', '$artis', '$album', '$genre','$durasi')
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
    $judul =  htmlspecialchars ($data['judul']);
    $artis =  htmlspecialchars ($data['artis']);
    $album =  htmlspecialchars ($data['album']);
    $genre =  htmlspecialchars ($data['genre']);
    $durasi =  htmlspecialchars ($data['durasi']);
    $query = "UPDATE music SET
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