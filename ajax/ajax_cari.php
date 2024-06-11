<?php
require '../function/functions.php';



    // $query = "SELECT * FROM music
    //             WHERE
    //             judul like '%$keyword%' OR
    //             artis like '%$keyword%' OR
    //             album like '%$keyword%' OR
    //             genre like '%$keyword%' 
    //             ";
    // $music = query($query);



?>
<table>
<div class="container">
    <main>
      <!-- <?php $i = 1;
            foreach ($music as $msc) : ?> -->
      <div class="lagu">
        <div class="cover">
          <img src="../images/<?= $msc['gambar'] ?>" class="cover-album" />
        </div>
        <div class="judul">
          <h5><?= $msc['judul']; ?></h5>
          <p><?= $msc['genre']; ?></p>
          <a href="detail_music.php?id=<?= $msc['id']; ?>" class="fa-solid fa-play"></a>
        </div>
      </div>
      <?php endforeach; ?>
    </main>
  </div>
  </table>