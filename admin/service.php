<?php
include "admin_header.php";
$page = "service";
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
                                <h4><i class="fa fa-angle-right"></i> Service Table</h4>
                                <a  href="new_service.php" ><button class="btn btn-primary me-3">Add</button></a>
                            </div>

                            <hr>
                            <thead>
                            <tr>

                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Title</th>
                                <th><i class="fa fa-bookmark"></i> Content</th>
                                <th><i class=" fa fa-edit"></i> Image</th>
                                <th><i class=" fa fa-edit"></i> Slug</th>

                                <th><i class=" fa fa-edit"></i> Date</th>
                                <th><i class=" fa fa-edit"></i> status</th>
                                <th><i class=" fa fa-edit"></i> Actions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                           <?php foreach ($getData as $key){
//                               var_dump($key['id']);?>
                            <tr>

                                <td class="hidden-phone"><?= $key['title'] ?></td>
                                <td><?= $key['content'] ?></td>

                                <td><img src="../admin/img/<?= $key['image'];?> " width="100" style="border-radius: 10px;"></td>
                                <td> <?= $key['slug'] ?></td>

                                <td> <?= $key['created_at'] ?></td>
                                <td><?= $key['status']==1?'Active':'Deactive'; ?></td>
                                <td>
<!--                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>-->
                                    <a href="../settings/crud.php?status_service_id=<?= $key['id'] ?>" >   <button class="btn <?= $key['status']==1?'btn-success':'btn-danger'?>  btn-xs"><i class="fa fa-check"></i></button></a>

                                    <a  href="update_service.php?update_service_id=<?= $key['id'] ;?>">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a onclick="return confirm('Are you sure?');" href="../settings/crud.php?delete_service_id=<?= $key['id'] ?>" >  <button class="btn btn-danger btn-xs" name="button" ><i class="fa fa-trash-o"></i></button></a>
                                </td>
                            </tr>

                           <?php } ; ?>
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