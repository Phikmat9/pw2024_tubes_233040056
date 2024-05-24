<?php

    function koneksi()
    {
        $db = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040056' );
        return $db;
    }


    function query($db)
    {
        $conn = koneksi();
        $result = mysqli_query($conn, 'SELECT * FROM music');
        $rows = [];
        while($row = mysqli_fetch_assoc($result))
            {
             $rows[] = $row;
            }
        return $rows;
    }


  
    function tambah($data){

    $conn = koneksi();

    $judul = $data['judul'];
    $artis = $data['artis'];
    $album = $data['album'];
    $genre = $data['genre'];
    $durasi = $data['durasi'];
    
    $sql = "INSERT INTO music
              VALUES (null, '$judul', '$artis', '$album', '$genre', '$durasi')
            ";

    mysqli_query($conn, $sql);
}


    function hapus($id){
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM music WHERE id = $id") or die(mysqli_error($conn));
    
        return mysqli_affected_rows($conn);
    
    }


?>