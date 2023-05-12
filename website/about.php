<?php include "header.php";
$page = 'about';
include '../settings/siteSetting.php';
?>


<!-- about -->
<div class="about">
    <div class="container_width">
        <div class="row d_flex grig">
            <?php foreach ($about as $key => $val): ?>
                <div class="col-md-6">
                    <div class="img-box-about"><img src="<?= $val['image']; ?>" alt="#"/></div>
                </div>
                <div class="col-md-6 order">
                    <div class="titlepage text_align_left">
                        <h2><?= $val['title']; ?></h2>
                        <p><?= $val['content']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end about -->

<?php include 'footer.php'; ?>