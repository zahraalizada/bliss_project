<?php include "admin_header.php"; ?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Contact</h3>
        <div class="row mt">
            <!--  DATE PICKERS -->

            <div class="col-lg-12">
                <div class="form-panel">
                    <form action="../settings/crud.php" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">

                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="name" size="16" type="text" value="">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Number</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="number" size="16"  type="number" value="">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="email" size="16" type="email" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Date</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="date" size="16" type="date" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Time</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="time" size="16" type="time" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Mesage</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="message" size="16" type="text" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="status" value="0">0
                                </label>
                                <label>
                                    <input type="radio" name="status" id="status" value="1">1
                                </label>
                            </div>

                        </div>

                        <a  ><button class="btn btn-primary me-3" name="add_contact">Add</button></a>
                </div>
            </div>
            </form>
        </div>
        <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
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