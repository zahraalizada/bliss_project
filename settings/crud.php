<?php
include "functions.php";

//======= service insert======
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
    if ($_FILES['image']['name'] != '') {
        echo 'if';
        exit();
        getUpdate('service', ['title', 'content', 'image', 'slug', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $image, $_POST['slug'], $_POST['status'], 1], $hidden_update_id);
    } else {
        var_dump($image);

        getUpdate('service', ['title', 'content', 'status', 'slug', 'created_at'], [$_POST['title'], $_POST['content'], $_POST['slug'], $_POST['status'], 1], $hidden_update_id);
    }
    redirect('../admin/service.php');
}
if (isset($_GET['status_service_id'])) {
    $data = getData('service', $_GET['status_service_id']);
    $data['status'] == 0 ? $status = 1 : $status = 0;
    getUpdate('service', ['status'], [$status], $_GET['status_service_id']);
    redirect('../admin/service.php');
}


//========about insert=====
if (isset($_POST['add_about'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('about', ['title', 'content', 'image', 'date', 'status'], [$_POST['title'], $_POST['content'], $image, $_POST['status'], date("Y/m/d")]);
    redirect('../admin/about.php');
}
if (isset($_GET['delete_about_id'])) {
    $getDelete = getDelete('about', $_GET['delete_about_id']);
    redirect('../admin/about.php');
}
if (isset($_POST['update_about'])) {
    $image = getImage($_FILES['image']);
    $hidden_update_id = $_POST['hidden'];
    if ($_FILES['image']['name'] != '') {
        getUpdate('about', ['title', 'content', 'image', 'status', 'date'], [$_POST['title'], $_POST['content'], $image, $_POST['status'], date("Y/m/d")], $hidden_update_id);
    } else {
        getUpdate('about', ['title', 'content', 'status', 'date'], [$_POST['title'], $_POST['content'], $_POST['status'], date("Y/m/d")], $hidden_update_id);
    }
    redirect('../admin/about.php');
}
//===contact send===

if (isset($_POST['contact_send'])) {

    $data = getInsert('contact', ['name', 'email', 'number', 'date', 'message', 'time'], [$_POST['name'], $_POST['email'], $_POST['number'], $_POST['date'], $_POST['message'], $_POST['time'],]);
    redirect('../website/index.php');
}

//====== contact insert========
if (isset($_POST['add_contact'])) {
    $data = getInsert('contact', ['name', 'email', 'number', 'date', 'message', 'status', 'time'], [$_POST['name'], $_POST['email'], $_POST['number'], $_POST['date'], $_POST['message'], $_POST['status'], $_POST['time'],]);
    redirect('../admin/contact.php');
}
if (isset($_GET['delete_contact_id'])) {
    $getDelete = getDelete('contact', $_GET['delete_contact_id']);
    redirect('../admin/contact.php');
}

if (isset($_GET['status_contact_id'])) {
    $data = getData('contact', $_GET['status_contact_id']);
    $data['status'] == 0 ? $status = 1 : $status = 0;
    getUpdate('contact', ['status'], [$status], $_GET['status_contact_id']);
    redirect('../admin/contact.php');
}
if (isset($_POST['update_contact'])) {
    $hidden_update_id = $_POST['hidden'];
    getUpdate('contact', ['name', 'email', 'number', 'date', 'message', 'status', 'time'], [$_POST['name'], $_POST['email'], $_POST['number'], $_POST['date'], $_POST['message'], $_POST['status'], $_POST['time']], $hidden_update_id);
    redirect('../admin/contact.php');

}

// =========== SLIDER ============
// slider insert
if (isset($_POST['add_slider'])) {
    $image1 = getImage($_FILES['video_img1']);
    $image2 = getImage($_FILES['video_img2']);
    $data = getInsert('slider', ['title', 'content', 'video_img1', 'video_img2', 'video_url1', 'video_url2', 'detail_link'], [$_POST['title'], $_POST['content'], $image1, $image2, $_POST['video_url1'], $_POST['video_url2'], $_POST['detail_link']]);
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
    $arr1 = ['title', 'content', 'video_url1', 'video_url2', 'detail_link'];
    $arr2 = [$_POST['title'], $_POST['content'], $_POST['video_url1'], $_POST['video_url2'], $_POST['detail_link']];
    if ($_FILES['video_img1']['name'] != '' && $_FILES['video_img2']['name'] != '') {
        $arr1 = array_merge($arr1, ['video_img1', 'video_img2']);
        $arr2 = array_merge($arr2, [getImage($_FILES['video_img1']), getImage($_FILES['video_img2'])]);
        getUpdate('slider', $arr1, $arr2, $hidden_input_id);
    } elseif ($_FILES['video_img1']['name'] == '' && $_FILES['video_img2']['name'] != '') {
        $arr1 = array_merge($arr1, ['video_img2']);
        $arr2 = array_merge($arr2, [getImage($_FILES['video_img2'])]);
        getUpdate('slider', $arr1, $arr2, $hidden_input_id);
    } elseif ($_FILES['video_img1']['name'] != '' && $_FILES['video_img2']['name'] == '') {
        $arr1 = array_merge($arr1, ['video_img1']);
        $arr2 = array_merge($arr2, [getImage($_FILES['video_img1'])]);
        getUpdate('slider', $arr1, $arr2, $hidden_input_id);
    } else {
        getUpdate('slider', $arr1, $arr2, $hidden_input_id);
    }
    redirect('../admin/slider.php');
}


// =========== BLOG ============
// blog insert
if (isset($_POST['add_blog'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('blog', ['title', 'content', 'image', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $image, $_POST['status'], 1]);
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

    if ($_FILES['image']['name'] != '') {
        getUpdate('blog', ['title', 'content', 'image', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $image, $_POST['status'], 1], $hidden_update_id);
    } else {
        getUpdate('blog', ['title', 'content', 'status', 'created_at'], [$_POST['title'], $_POST['content'], $_POST['status'], 1], $hidden_update_id);
    }
    redirect('../admin/blog.php');
}

if (isset($_GET['change_blog_status'])) {
    $data = getData('blog', $_GET['change_blog_status']);
    $data['status'] == 1 ? $status = 0 : $status = 1;
    getUpdate('blog', ['status'], [$status], $_GET['change_blog_status']);
    redirect('../admin/blog.php');
}


// =========== SOCIAL ============
// social insert
if (isset($_POST['add_social'])) {
    $data = getInsert('social', ['title', 'link', 'icon'], [$_POST['title'], $_POST['link'], $_POST['icon']]);
    redirect('../admin/social.php');
}

// social delete
if (isset($_GET['delete_social_id'])) {
    getDelete('social', $_GET['delete_social_id']);
    redirect('../admin/social.php');
}

// social update
if (isset($_POST['update_social'])) {
    $hidden_update_id = $_POST['hdnid'];

    getUpdate('social', ['title', 'link', 'icon'], [$_POST['title'], $_POST['link'], $_POST['icon']], $hidden_update_id);
    redirect('../admin/social.php');
}


// =========== SUBSCRIBE ============
// subscribe delete
if (isset($_GET['delete_subscribe_id'])) {
    getDelete('subscribe', $_GET['delete_subscribe_id']);
    redirect('../admin/subscribe.php');
}

// subscribe update
if (isset($_POST['update_subscribe'])) {
    $hidden_update_id = $_POST['hdnid'];

    getUpdate('social', ['email'], [$_POST['email']], $hidden_update_id);
    redirect('../admin/subscribe.php');
}

///======LOGIN======
if (isset($_POST['admin_login'])) {
//    $data = getDataColumns('login_admin', ['password', 'user_name'], [$_POST['password'], $_POST['user_name']]);
//    if ($data) {
//        header("location: ../admin/index.php");
//        exit();
//    } else {
//        header("location: ../admin/login.php");
//        exit();
//    }

    $data = getData('login_admin');
    $user_name = $data[0]['user_name'];
    $password = $data[0]['password'];
    if (empty($_POST['user_name']) || empty($_POST['password'])) {
        echo 'Password ve ya User Name bos ola bilmez ';
        header("location: ../website/login.php");
        exit();
    } elseif ($_POST['user_name'] === $user_name && $_POST['password'] === $password) {
        $_SESSION['admin'] = $_POST['user_name'];
        header("location: ../admin/index.php");
        exit();
    } else {
        echo 'Password ve ya User Name duzgun deil';
        header("location: ../website/login.php");
    }
}

///========PROFIL======
if (isset($_POST['add_profile'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('login_admin', ['user_name', 'password', 'image'], [$_POST['user_name'], $_POST['password'], $image]);
    redirect('../admin/profile.php');
}
if (isset($_GET['delete_profil_id'])) {
    $getDelete = getDelete('login_admin', $_GET['delete_profil_id']);
    redirect('../admin/profile.php');
}
if (isset($_POST['update_profil'])) {
    $image = getImage($_FILES['image']);
    $hidden_update_id = $_POST['hidden'];
    if ($_FILES['image']['name'] != '') {

        getUpdate('login_admin', ['user_name', 'password', 'image'], [$_POST['user_name'], $_POST['password'], $image], $hidden_update_id);
    } else {
        getUpdate('login_admin', ['user_name', 'password', 'image'], [$_POST['user_name'], $_POST['password'], $image], $hidden_update_id);
    }
    redirect('../admin/profile.php');
}


//===subscribe email send===
if (isset($_POST['subscribe_send'])) {

    $data = getInsert('subscribe', ['email'], [$_POST['email']]);
    redirect('../website/index.php');
}

?>