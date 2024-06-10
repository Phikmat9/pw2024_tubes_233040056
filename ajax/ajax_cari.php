<?php
include '../function/functions.php';
$music = cari($_GET['keyword']);
?>

<div class="row gy-4 ">

    <?php if (empty($music)) : ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">

                <div class="card-body bg-danger text-center">
                    <h5 class="card-title">DATA TIDAK DI TEMUKAN</h5>
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php $i = 1;
    foreach ($music as $msc) : ?>
        <div class="col-md-3 col-6">
            <div class="card" style="width: 14rem;">
                <img src="../images/<?= $msc['gambar'] ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= $i++ ?>. <?= $msc['judul'] ?></h5>
                    <h6 class="card-title"><?= $msc['artis'] ?></h6>
                    <p class="card-text">
                        <td><?= $msc['genre'] ?></td>
                    </p>
                    <a href="../tampilan/detail_music.php/?= $msc['id_music']; ?>">lihat detail</a>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>