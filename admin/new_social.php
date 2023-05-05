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
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Social Component</h4>
                        <form action="../settings/crud.php" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" placeholder="Add title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Link</label>

                                <div class="col-sm-10">
                                    <textarea style="resize: vertical" class="form-control mb-1" name="link" id="contact-message" placeholder="Add link" rows="1" data-rule="required" data-msg="Please write something for us"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="icon" placeholder="Exp: <i class='fa-solid fa-user'></i>">
                                    <div class="mt-3 fa ">
                                        <a href="https://fontawesome.com/search" target="_blank">Select icon (click here)</a>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit" name="add_social">Add</button>
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