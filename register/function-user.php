<?php
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
    
// tambah data user
function tambah($data)
{
    $conn = koneksi();
    // cek apakah data berhasil di tambahkan atau tidak
    $username =  htmlspecialchars($data['username']);
    $password =  htmlspecialchars($data['password']);
    
    
    $sql = "INSERT INTO user VALUES
            (null, '$username', '$password')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// login
function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if ($_POST["username"] == "hikmat.pandu" && $_POST["password"] == "unpas925") {
    // session
    $_SESSION['login'] = true;

    header("location: ../tampilan/admin.php");
    exit;
    }
   
 // cek username
    if( query("SELECT * FROM user WHERE username = '$username' && password = '$password' ")){
        // set session
        $_SESSION['login'] = true;

        header("location: ../tampilan/user.php");
        exit;
        }else{
        return [
            'error' => true,
            'pesan' => 'username / Password Salah!'
        ];
    }
}


?>