<?php
include "functions.php";

// service insert
if (isset($_POST['add_service'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('service', ['title', 'content', 'image', 'slug', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $image, $_POST['slug'], $_POST['status'], 1]);
    redirect('../admin/service.php');
}

if (isset($_GET['delete_service_id'])) {
    $getDelete = getDelete('service', $_GET['delete_service_id']);
    redirect('../admin/service.php');
}
if (isset($_POST['update_service'])) {
    $image = getImage($_FILES['image']);
    $hidden_update_id = $_POST['hidden'];

    getUpdate('service', ['title', 'content', 'image', 'slug', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $image, $_POST['slug'], $_POST['status'], 1], $hidden_update_id);
    redirect('../admin/service.php');
}


// slider insert
if (isset($_POST['add_slider'])) {
    $image1 = getImage($_FILES['video_img1']);
    $image2 = getImage($_FILES['video_img2']);
    $data = getInsert('slider', ['title', 'content', 'video_img1', 'video_img2', 'video_url1', 'video_url2', 'detail_link'], [$_POST['title'], $_POST['content'], $image1, $image2, $_POST['video_url1'], $_POST['video_url2'],$_POST['detail_link']]);
    redirect('../admin/slider.php');
}

// slider delete
if (isset($_GET['delete_slider_id'])) {
    getDelete('slider', $_GET['delete_slider_id']);
    redirect('../admin/slider.php');
}

// slider update
if (isset($_POST['update_slider'])) {
    $hidden_input_id = $_POST['hdnid'];
    getUpdate('slider', ['title', 'content', 'video_img1', 'video_img2', 'video_url1', 'video_url2','detail_link'], [$_POST['title'], $_POST['content'], $_POST['video_img1'], $_POST['video_img2'], $_POST['video_url1'], $_POST['video_url2'],$_POST['detail_link']], $hidden_input_id);
    redirect('../admin/slider.php');
}


?>