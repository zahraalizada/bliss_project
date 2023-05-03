<?php
include "admin_header.php";
include "../settings/setting.php";

?>


    <!-- row -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Slider Components</h4>
                        <form action="../settings/crud.php" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Video_URL1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="video_url1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Video_URL2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="video_url2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Details link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="detail_link">
                                </div>
                            </div>


                            <div class="form-group last">
                                <label class="control-label col-md-2">Image Upload 1</label>
                                <div class="col-md-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload"><input
                                                type="hidden">
                                        <div class="fileupload-new thumbnail img-box-mh150" >
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" name="video_img1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group last">
                                <label class="control-label col-md-2">Image Upload 2</label>
                                <div class="col-md-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload"><input
                                                type="hidden">
                                        <div class="fileupload-new thumbnail img-box-mh150" >
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" name="video_img2">
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit" name="add_slider">Save</button>
<!--                                    <button class="btn btn-theme04" type="button">Cancel</button>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- col-lg-12-->
            </div>
        </section>
    </section>


<?php include "admin_footer.php"; ?>