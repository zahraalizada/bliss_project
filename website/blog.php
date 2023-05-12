<?php include "header.php";
$page = 'blog';
include '../settings/siteSetting.php';
?>

<!-- blog -->
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center ">
                    <h2>Latest Blog</h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                </div>
            </div>
        </div>
        <div class="row d_flex">
            <?php foreach ($blog as $key => $val): ?>
                <div class=" col-md-4">
                    <div class="latest">
                        <div class="img-box-blog"><img src="<?= $val['image']; ?>" alt="#"/></div>
                        <span><?= $val['created_at']; ?></span>
                        <div class="nostrud">
                            <h3><?= $val['title']; ?> </h3>
                            <p><?= $val['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>