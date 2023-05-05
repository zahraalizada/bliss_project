<?php
include "admin_header.php";
$page = "contact";
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
                                <h4><i class="fa fa-angle-right"></i> Contact Table</h4>
                                <a  href="new_contact.php" ><button class="btn btn-primary me-3">Add</button></a>

                            </div>

                            <hr>
                            <thead>
                            <tr>

                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                                <th><i class="fa fa-bookmark"></i>Number</th>
                                <th><i class=" fa fa-edit"></i> Email</th>
                                <th><i class=" fa fa-edit"></i> Message</th>
                                <th><i class=" fa fa-edit"></i> Date</th>
                                <th><i class=" fa fa-edit"></i> Time</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th><i class=" fa fa-edit"></i> Actions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                           <?php foreach ($getData as $key){
//                               var_dump($key['id']);?>
                            <tr>

                                <td class="hidden-phone"><?= $key['name'] ?></td>
                                <td><?= $key['number'] ?></td>
                                <td> <?= $key['message'] ?></td>
                                <td> <?= $key['email'] ?></td>
                                <td> <?= $key['date'] ?></td>
                                <td> <?= $key['time'] ?></td>
                                <td><?= $key['status']==1?'Pending':'Done'; ?></td>
                                <td>
<!--                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>-->
                                    <a href="../settings/crud.php?status_contact_id=<?= $key['id'] ?>" >   <button class="btn <?= $key['status']==1?'btn-success':'btn-danger'?>  btn-xs"><i class="fa fa-check"></i></button></a>

                                    <a  href="update_contact.php?update_contact_id=<?= $key['id'] ;?>">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a onclick="return confirm('Are you sure?');" href="../settings/crud.php?delete_contact_id=<?= $key['id'] ?>" >  <button class="btn btn-danger btn-xs" name="button" ><i class="fa fa-trash-o"></i></button></a>
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