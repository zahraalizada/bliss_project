<?php
include "functions.php";
// service inserti

//$insert = getInsert('users',['name','image','title'],[$_POST['sadiq'],'http','basliq']);
//if ($insert){
//    header("Location: ");
//}

if (isset($_POST['add_service'])){

  $data=getInsert('service',['title','content','image','slug','status','created_at'],[$_POST['title'],$_POST['content'],' ',$_POST['slug'],$_POST['status'],1]);
  header('location:../admin/service.php');
}
var_dump($data);

?>