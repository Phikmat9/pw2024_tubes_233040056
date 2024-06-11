<?php
require '../function/functions.php';

// Mengambil keyword dari URL
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM music
              WHERE
              judul LIKE '%$keyword%' OR
              artis LIKE '%$keyword%' OR
              album LIKE '%$keyword%' OR
              genre LIKE '%$keyword%'";
    $music = query($query);
}
?>
<table>
<div class="container">
    <main>
      <?php if (!empty($music)) : ?>
        <?php foreach ($music as $msc) : ?>
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
      <?php else : ?>
        <p>No music found</p>
      <?php endif; ?>
    </main>
  </div>
</table>
