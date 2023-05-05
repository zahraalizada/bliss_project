<?php include "admin_header.php";
$page = "social";
$id = $_GET['update_social_id'];

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
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Update Social Component</h4>
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
                                <label class="col-sm-2 col-sm-2 control-label">Link</label>
                                <div class="col-sm-10">
                                    <textarea style="resize: vertical" class="form-control" name="link"
                                              id="contact-message" rows="1"
                                              data-rule="required"><?= trim($data['link']); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Icon</label>
                                <div class="col-sm-10">
                                    <textarea style="resize: vertical" class="form-control" name="icon"
                                              id="contact-message" rows="1"
                                              data-rule="required"><?= trim($data['icon']); ?></textarea>
                                    <div class="mt-3 fa ">
                                        <a href="https://fontawesome.com/search" target="_blank">Select icon (click
                                            here)</a>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit" name="update_social">Save</button>
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