<?php include "admin_header.php";
$page = "contact";
$id = $_GET['update_contact_id'];
include "../settings/setting.php";
?>
<?php
$data = $getData;
?>



<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Contact</h3>
        <div class="row mt">
            <!--  DATE PICKERS -->

            <div class="col-lg-12">
                <div class="form-panel">
                    <form action="../settings/crud.php" class="form-horizontal style-form" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="hidden" name="hidden" value="<?= $data['id'] ?>">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="name" size="16" type="text" value=" <?php echo $data['name'] ?>">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Number</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="number" size="16"  type="text" value="<?php echo $data['number'] ?>">

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="email" size="16" type="text" value="<?php echo $data['email'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Message</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="message" size="16" type="text" value="<?php echo $data['message'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Date</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="date" size="16" type="text" value="<?php echo $data['date'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Time</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="time" size="16" type="text" value="<?php echo $data['time'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="radio">
                                <label class="ml-20">
                                    <input type="radio" name="status" id="status" value="<?php echo $data['status'] ?>">
                                    0
                                </label>
                                <label class="ml-20">
                                    <input type="radio" name="status" id="status" value="<?php echo $data['status'] ?>">
                                   1
                                </label>
                            </div>

                        </div>


                        <a  ><button class="btn btn-primary me-3" name="update_contact">Update</button></a>
                            </div>
                        </div>



                    </form>
                </div>
                <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- DATE TIME PICKERS -->


                    </form>
                </div>
                <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- row -->
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<!--footer start-->
<footer class="site-footer">

</footer>


<!--footer end-->
</section>
<?php include "admin_footer.php"; ?>