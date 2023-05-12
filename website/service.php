<?php include "header.php";
$page = 'service';
include '../settings/siteSetting.php';
?>

    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Massage Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($service as $key => $val): ?>
                    <div class="col-md-4">
                        <div id="ho_shad" class="services_box text_align_left">
                            <h3><?= $val['title']; ?></h3>
                            <div class="img-box-service"><img src="<?= $val['image']; ?>" alt="#"/></div>
                            <p><?= $val['content']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>