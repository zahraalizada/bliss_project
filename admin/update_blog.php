<?php include "admin_header.php";
$page = "blog";
$id = $_GET['update_blog_id'];

include "../settings/setting.php";
?>
<?php $data = $getData;

?>

    <!-- row -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Update Blog Component</h4>
                        <form action="../settings/crud.php" class="form-horizontal style-form" method="post"
                              enctype="multipart/form-data">
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
                                    <textarea style="resize: vertical" class="form-control" name="content"
                                              id="contact-message" rows="5"
                                              data-rule="required"><?= trim($data['content']); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value='0' <?= $data['status']==0?"checked='checked'":'' ?>>Deactive</option>
                                        <option value='1' <?= $data['status']==1?"checked='checked'":'' ?>>Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-md-2">Image Upload </label>
                                <div class="col-md-10">
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


                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit" name="update_blog">Save</button>
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