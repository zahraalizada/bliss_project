<?php include "admin_header.php";
$page = "about";
$id = $_GET['update_about_id'];
include "../settings/setting.php";
?>
<?php
$data = $getData;

?>


    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Form About</h3>
            <div class="row mt">
                <!--  DATE PICKERS -->

                <div class="col-lg-12">
                    <div class="form-panel">
                        <form action="../settings/crud.php" class="form-horizontal style-form" method="post"
                              enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="hidden" name="hidden" value="<?= $data['id'] ?>">
                                <label class="control-label col-md-3">Title</label>
                                <div class="col-md-3 col-xs-11">
                                    <input class="form-control form-control-inline input-medium default-date-picker"
                                           name="title" size="16" type="text" value=" <?php echo $data['title'] ?>">

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Content</label>
                                <div class="col-md-3 col-xs-11">
                                    <input class="form-control form-control-inline input-medium default-date-picker"
                                           name="content" size="16" type="text" value="<?php echo $data['content'] ?>">

                                </div>
                            </div>

                            <div class="form-group last">
                                <label class="control-label col-md-3">Image Upload </label>
                                <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload"><input
                                                type="hidden">
                                        <div class="fileupload-new thumbnail img-box-mh150">
                                            <img src="../admin/img/<?= $data['image'] ?>" alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" name="image">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a>
                                <button class="btn btn-primary me-3" name="update_about">Update</button>
                            </a>
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