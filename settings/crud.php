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

if (isset($_GET['status_service_id'])) {
    $data = getData('service',$_GET['status_service_id']);
    $data['status']==0?$status =1:$status=0;
    getUpdate('service', ['status'], [$status],$_GET['status_service_id']);
    redirect('../admin/service.php');
}


// =========== SLIDER ============
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
     $arr1 = ['title', 'content', 'video_url1', 'video_url2','detail_link'];
    $arr2 = [$_POST['title'], $_POST['content'], $_POST['video_url1'], $_POST['video_url2'],$_POST['detail_link']];
    if ($_FILES['video_img1']['name'] !=''  && $_FILES['video_img2']['name'] !=''){
        $arr1 = array_merge($arr1,['video_img1', 'video_img2']);
        $arr2 =  array_merge($arr2,[getImage($_FILES['video_img1']), getImage($_FILES['video_img2'])]);
        getUpdate('slider', $arr1,$arr2 , $hidden_input_id);
    } elseif ($_FILES['video_img1']['name'] ==''  && $_FILES['video_img2']['name'] !=''){
        $arr1 = array_merge($arr1,[ 'video_img2']);
        $arr2 =  array_merge($arr2,[getImage($_FILES['video_img2'])]);
        getUpdate('slider', $arr1,$arr2 , $hidden_input_id);
    } elseif ($_FILES['video_img1']['name'] !=''  && $_FILES['video_img2']['name'] ==''){
        $arr1 = array_merge($arr1,[ 'video_img1']);
        $arr2 =  array_merge($arr2,[getImage($_FILES['video_img1'])]);
        getUpdate('slider', $arr1,$arr2 , $hidden_input_id);
    }
    else{
        getUpdate('slider', $arr1,$arr2 , $hidden_input_id);
    }
    redirect('../admin/slider.php');
}


// =========== BLOG ============
// blog insert
if (isset($_POST['add_blog'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('blog', ['title', 'content', 'image', 'status','created_at'], [$_POST['title'], $_POST['content'], $image, $_POST['status'],1]);
    redirect('../admin/blog.php');
}

// blog delete
if (isset($_GET['delete_blog_id'])) {
    getDelete('blog', $_GET['delete_blog_id']);
    redirect('../admin/blog.php');
}

// blog update
if (isset($_POST['update_blog'])) {
    $image = getImage($_FILES['image']);
    $hidden_update_id = $_POST['hdnid'];

    if($_FILES['image']['name'] !=''){
        getUpdate('blog', ['title', 'content', 'image', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $image, $_POST['status'],1], $hidden_update_id);
    } else{
        getUpdate('blog', ['title', 'content', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $_POST['status'],1], $hidden_update_id);
    }
    redirect('../admin/blog.php');
}

if (isset($_GET['change_blog_status'])){
    $data = getData('blog',$_GET['change_blog_status']);
    $data['status']==1?$status=0:$status=1;
    getUpdate('blog',['status'],[$status],$_GET['change_blog_status']);
    redirect('../admin/blog.php');
}


?>