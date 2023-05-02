<?php

include "db.php";


function getInsert(string $tName,array $columnName,array $values): bool
{
    global  $conn;

    $sql = "INSERT INTO  $tName  (" . implode(',' , $columnName) .") VALUES (?, ? , ? , ? , ?, ?)";

    $insert = $conn->prepare($sql);
    $insert->execute($values);

    return true;
}

function getUpdate(string $tName,array $columnName,array $values,int $id): bool
{

    return true;
}

function getData(string $tableName,$id=null){
    if ($id==null){

    }else{

    }
    return true;
}

function getDelete(string $tableName,int $id): bool
{
    $query = $conn->prepare("DELETE FROM $tableName WHERE id = ?");
    return (bool)  $query->execute([$id]);
}

//$insert = getInsert('services',['name','image','title'],['sadiq','http','basliq']);
//$update = getUpdate('services',['name','image','title'],['sadiq','http','basliq'],1);
//$getData = getData('services');
//$getData = getData('services',1);
//$getDelete = getDelete('services',$_POST['id']);
//if ($insert){
//
//}

//anar test
//$sql = "INSERT INTO about (header,image,content) VALUES (?,?,?)";
//$insert = $conn->prepare($sql);
//$insert->execute([$about_header,$about_image,$about_description]);
//header("Location:add_about.php");
?>