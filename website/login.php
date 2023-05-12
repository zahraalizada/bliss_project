<?php include "../website/header.php"; ?>
<?php if (isset($_SESSION['admin'])){
    header("location: ../admin/index.php");
    exit();
} ?>
<div class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage text_align_center">
                    <h2>Welcome </h2>
                    <p>admin panele giris</p>
                </div>
            </div>
            <div class="col-md-12">
                <form id="request" class="main_form" method="post" action="../settings/crud.php">
                    <div class="row">
                        <div class="col-md-6 ">
                            <input class="form_control" placeholder="User_name" type="type" name=" user_name">
                        </div>
                        <div class="col-md-6">
                            <input class="form_control" placeholder="Password" type="password" name="password">
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn" name="admin_login">Enter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "../website/footer.php";?>
