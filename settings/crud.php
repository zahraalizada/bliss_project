<?php

// service inserti

$insert = getInsert('users',['name','image','title'],[$_POST['sadiq'],'http','basliq']);
if ($insert){
    header("Location: ");
}




?>