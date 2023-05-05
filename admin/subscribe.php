<?php
include "admin_header.php";
$page = "subscribe";
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
                                <h4><i class="fa fa-angle-right"></i> Subscribe Links Table</h4>

                            </div>

                            <hr>
                            <thead>
                            <tr>
                                <th >Email</th>
                                <th width="20%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getData as $key) { ?>

                                <tr>
                                    <td ><?= $str = substr($key['email'], 0, 15) ; ?></td>
                                    <td>
                                        <a href="<?= "update_subscribe.php?update_subscribe_id=". $key['id'] ?>">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></i>
                                            </button>
                                        </a>
                                        <a onclick="return confirm('Are you sure?');"
                                           href="<?= "../settings/crud.php?delete_subscribe_id=" . $key['id'] ?>">
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