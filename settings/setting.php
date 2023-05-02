<?php

include "functions.php";


if (isset($page)) {

    if ($page == "slider") {
        $getData = getData('slider');
    }

    if ($page == "service") {

        $getData = getData('service');
//        var_dump($getData[0]['title']);
//        exit();

    }


}

?>