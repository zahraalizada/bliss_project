<?php
include "admin_header.php";
$page = "slider";
include "../settings/setting.php";

?>


    <!-- row -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4><i class="fa fa-angle-right"></i> Slider Table</h4>
                                <a href="new_slider.php">
                                    <button class="btn btn-primary me-3">Add</button>
                                </a>
                            </div>

                            <hr>
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th> Content</th>
                                <th> Video_img1</th>
                                <th> Video_img2</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getData as $key) { ?>

                                <tr>
                                    <td><?= $key['title'] ?></td>
                                    <td><?= $key['content'] ?></td>
                                    <td>
                                        <div class="img-box">
                                            <img src="../admin/img/<?= $key['video_img1'];?> ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="img-box">
                                            <img src="../admin/img/<?= $key['video_img2'];?> ">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?= "update_slider.php?update_slider_id=". $key['id'] ?>">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></i>
                                            </button>
                                        </a>
                                        <a onclick="return confirm('Are you sure?');"
                                           href="<?= "../settings/crud.php?delete_slider_id=" . $key['id'] ?>">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
            </div>
            </div>
            <!-- /row -->
        </section>
    </section>


<?php include "admin_footer.php"; ?>