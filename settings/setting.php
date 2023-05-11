<?php

include "functions.php";

if (!isset($_SESSION['admin'])){
    header("location: ../website/login.php");
    exit();
}
if (isset($page)) {

    if ($page == "slider") {
        $getData = getData('slider',$id ?? null);
    }

    if ($page == "service") {
        $getData = getData('service',$id ?? null);
    }

    if ($page == "blog") {
        $getData = getData('blog',$id ?? null);
    }

    if ($page == 'about') {
        $getData = getData('about', $id ?? null);
    }

    if ($page == 'contact') {
        $getData = getData('contact', $id ?? null);
    }

    if ($page == 'social') {
        $getData = getData('social', $id ?? null);
    }

    if ($page == 'subscribe') {
        $getData = getData('subscribe', $id ?? null);
    }

    if ($page == 'index') {
        $getservice = getData('service',$id ?? null);
        $getabout = getData('about', $id ?? null);
        $getcontact = getData('contact', $id ?? null);
        $getslider = getData('slider',$id ?? null);
    }

    if ($page == 'login') {
        $getData = getData('login_admin', $id ?? null);

    }

    if ($page == 'profil') {
        $getData = getData('login_admin', $id ?? null);

    }
}

?>