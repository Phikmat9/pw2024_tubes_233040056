<?php

require 'functions.php';


$id = $_GET['id'];
if (hapus ($id) > 0){
    echo "<script>
           alert ('data berhasil hapus');
   
           documet.location.href = 'mymusic.php'; 
          </script>";
    }
?>