<?php

include "db.php";

function getInsert(string $tName,array $columnName,array $values): bool
{
    return true;
}

$insert = getInsert('services',['name','image','title'],['sadiq','http','basliq']);
if ($insert){

}
//$sql = "INSERT INTO about (header,image,content) VALUES (?,?,?)";
//$insert = $conn->prepare($sql);
//$insert->execute([$about_header,$about_image,$about_description]);
//header("Location:add_about.php");
?>