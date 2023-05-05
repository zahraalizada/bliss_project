<?php include "admin_header.php";
$page = "subscribe";
$id = $_GET['update_subscribe_id'];

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
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Update Subscribe Component</h4>
                        <form action="../settings/crud.php" class="form-horizontal style-form" method="post"
                              enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="hdnid" value="<?php echo $data['id']; ?>">
                                    <input type="text" class="form-control" name="title" value="<?= $data['email'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit" name="update_subscribe">Save</button>
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