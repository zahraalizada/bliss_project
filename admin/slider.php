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
                                <th> Video_url1</th>
                                <th> Video_url2</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getData as $key) { ?>

                                <tr>
                                    <td><?= $key['title'] ?></td>
                                    <td><?= $key['content'] ?></td>
                                    <td><?= $key['video_img1'] ?></td>
                                    <td><?= $key['video_img2'] ?></td>
                                    <td><?= $key['video_url1'] ?></td>
                                    <td><?= $key['video_url2'] ?></td>
                                    <td><span class="label label-info label-mini">Status 1</span></td>
                                    <td>
                                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
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