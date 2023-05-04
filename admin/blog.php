<?php
include "admin_header.php";
$page = "blog";
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
                                <h4><i class="fa fa-angle-right"></i> Blog Table</h4>
                                <a href="new_blog.php">
                                    <button class="btn btn-primary me-3">Add</button>
                                </a>
                            </div>

                            <hr>
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th> Content</th>
                                <th> Image</th>
                                <th> Status</th>
                                <th> Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getData as $key) { ?>

                                <tr>
                                    <td><?= $str = substr($key['title'], 0, 15) ; ?></td>
                                    <td><?= $str = substr($key['content'], 0, 15) ; ?></td>
                                    <td>
                                        <div class="img-box">
                                            <img src="../admin/img/<?= $key['image'];?> ">
                                        </div>
                                    </td>
                                    <td><?= $key['status'] == 1? "Active":"Deactive"; ?></td>
                                    <td><?= $key['created_at']; ?></td>
                                    <td>
                                        <a href="<?="../settings/crud.php?change_blog_status=".$key['id']?>">
                                            <button class="btn <?= $key['status']==0?"btn-danger":"btn-success"?> btn-xs"><i class="fa fa-check"></i></button>
                                        </a>
                                        <a href="<?= "update_blog.php?update_blog_id=". $key['id'] ?>">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></i>
                                            </button>
                                        </a>
                                        <a onclick="return confirm('Are you sure?');"
                                           href="<?= "../settings/crud.php?delete_blog_id=" . $key['id'] ?>">
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