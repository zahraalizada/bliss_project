<?php include "admin_header.php";
$page = "slider";
$id = $_GET['update_slider_id'];

include "../settings/setting.php";
?>
<?php $data = $getData; ?>


    <!-- row -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Update Slider Component</h4>
                        <form action="../settings/crud.php" class="form-horizontal style-form" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="hdnid" value="<?php echo $data['id']; ?>">
                                    <input type="text" class="form-control" name="title" value="<?= $data['title'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="content" value="<?= $data['content'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Video_img1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="video_img1" value="<?= $data['video_img1'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Video_img2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="video_img2" value="<?= $data['video_img2'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Video_URL1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="video_url1" value="<?= $data['video_url1'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Video_URL2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="video_url2" value="<?= $data['video_url2'] ?>">
                                </div>
                            </div>


                            <div class="form-group last">
                                <label class="control-label col-md-2">Image Upload</label>
                                <div class="col-md-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload"><input
                                                type="hidden">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default">
                                            </span>
                                            <a href="advanced_form_components.html#"
                                               class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i
                                                        class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-info">NOTE!</span>
                                    <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit" name="update_slider">Save</button>
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