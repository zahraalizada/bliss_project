<?php

include "functions.php";


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

    if ($page == 'social') {
        $getData = getData('social', $id ?? null);
    }

    if ($page == 'subscribe') {
        $getData = getData('subscribe', $id ?? null);
    }

}

?>