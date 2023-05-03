<?php
include "functions.php";

// service insert
if (isset($_POST['add_service'])){
  $data=getInsert('service',['title','content','image','slug','status','created_at'],[$_POST['title'],$_POST['content'],' ',$_POST['slug'],$_POST['status'],1]);
  header('location:../admin/service.php');
}

// slider insert
if (isset($_POST['add_slider'])){
  $data=getInsert('slider',['title','content','video_img1','video_img2','video_url1','video_url2'],[$_POST['title'],$_POST['content'],$_POST['video_img1'],$_POST['video_img2'],$_POST['video_url1'],$_POST['video_url2']]);
//  header('Location: ../admin/slider.php');
}

// slider delete
if (isset($_GET['delete_slider_id'])){
    getDelete('slider',$_GET['delete_slider_id']);
    header('Location: ../admin/slider.php');
}

// slider update
if (isset($_POST['update_slider'])){
    $hidden_input_id = $_POST['hdnid'];
    getUpdate('slider',['title','content','video_img1','video_img2','video_url1','video_url2'],[$_POST['title'],$_POST['content'],$_POST['video_img1'],$_POST['video_img2'],$_POST['video_url1'],$_POST['video_url2']],$hidden_input_id);
    header('Location: ../admin/slider.php');
}
if (isset($_GET['delete_service_id'])) {
//    var_dump($_GET['delete_service_id']);
$getDelete = getDelete('service',$_GET['delete_service_id']);
    header('location:../admin/service.php');
//    echo "delet";
}
if (isset($_POST['update_service'])){
    $hidden_update_id=$_POST['hidden'];
    var_dump($hidden_update_id);
   getUpdate('service',['title','content','image','slug','status','created_at'],[$_POST['title'],$_POST['content'],' ',$_POST['slug'],$_POST['status'],1],$hidden_update_id );
header('location:../admin/service.php');
}




?>