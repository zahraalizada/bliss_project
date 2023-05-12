<?php

include "functions.php";

if ($page=='index'){
    $slide = getData('slider');
    $service = getData('service');
    $about = getData('about');
    $blog = getData('blog');
}

if ($page=='about'){
    $about = getData('about');
}

if ($page=='service'){
    $service = getData('service');
}

if ($page=='blog'){
    $blog = getData('blog');
}


