<?php

include "functions.php";


if (isset($page)) {

    if ($page == "slider") {
        $getData = getData('slider');
    }

    if ($page == "service") {
        $getData = getData('service',$id ?? null);
    }


}

?>