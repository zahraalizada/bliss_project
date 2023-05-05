<?php
include "admin_header.php";
$page = "about";
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
                                <h4><i class="fa fa-angle-right"></i> About Table</h4>
                                <a  href="new_about.php" ><button class="btn btn-primary me-3">Add</button></a>
                            </div>

                            <hr>
                            <thead>
                            <tr>
                                <th class=""><i class=""></i> Title</th>
                                <th><i class=""></i> Content</th>
                                <th><i class=" "></i> Image</th>
                                <th><i class=" "></i> Date</th>
                                <th><i class=" "></i> Actions</th>
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
                                <td><?= $key['date'] ?></td>
                                <td>
                                    <a  href="update_about.php?update_about_id=<?= $key['id'] ;?>">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a onclick="return confirm('Are you sure?');" href="../settings/crud.php?delete_about_id=<?= $key['id'] ?>" >  <button class="btn btn-danger btn-xs" name="button" ><i class="fa fa-trash-o"></i></button></a>
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