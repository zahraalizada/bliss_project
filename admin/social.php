<?php
include "admin_header.php";
$page = "social";
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
                                <h4><i class="fa fa-angle-right"></i> Social Links Table</h4>
                                <a href="new_social.php">
                                    <button class="btn btn-primary me-3">Add</button>
                                </a>
                            </div>

                            <hr>
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th> Link</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getData as $key) { ?>

                                <tr>
                                    <td width="35%"><?= $str = substr($key['title'], 0, 15) ; ?></td>
                                    <td width="55%"><?= $str = substr($key['link'], 0, 15) ; ?></td>
                                    <td>
                                        <a href="<?= "update_social.php?update_social_id=". $key['id'] ?>">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></i>
                                            </button>
                                        </a>
                                        <a onclick="return confirm('Are you sure?');"
                                           href="<?= "../settings/crud.php?delete_social_id=" . $key['id'] ?>">
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