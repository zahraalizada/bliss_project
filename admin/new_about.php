<?php include "admin_header.php"; ?>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form About</h3>
        <div class="row mt">
            <!--  DATE PICKERS -->

            <div class="col-lg-12">
                <div class="form-panel">
                    <form action="../settings/crud.php" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">


                            <label class="control-label col-md-3">Title</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="title" size="16" type="text" value="">

                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3">Content</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" name="content" size="16"  type="text" value="">

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


                        <div class="form-group last">
                            <label class="control-label col-md-3">Image Upload</label>
                            <input type="file"  name="image" style="display: none;">
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="image" />
                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <a  ><button class="btn btn-primary me-3" name="add_about">Add</button></a>
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