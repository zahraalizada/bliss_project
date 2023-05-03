<?php

include "db.php";


function getInsert(string $tName,array $columnName,array $values): bool
{
    global  $conn;

    $sql = "INSERT INTO  $tName  (" . implode(',' , $columnName) .") VALUES (?, ? , ? , ? , ?, ?)";

    $insert = $conn->prepare($sql);
    return $insert->execute($values);


}

function getUpdate(string $tName,array $columnName,array $values,int $id): bool
{
    global  $conn;
    $sql = "UPDATE   $tName  SET ";
    for($i=0; $i<count($columnName); $i++){
        $sql.=' '.$columnName[$i].'=?,';
    }
    $sql = rtrim($sql,",");
    $sql.=" WHERE id={$id}";

    $insert = $conn->prepare($sql);
    return $insert->execute($values);
}

function getData(string $tableName,$id=null){
    global  $conn;

    if ($id==null){
        $sql="SELECT * FROM $tableName";
        $sth = $conn->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);

    }else{
        $sql="SELECT * FROM $tableName WHERE id = $id";
        $sth = $conn->prepare($sql);
        $sth->execute();
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }
    return true;
}

function getDelete(string $tableName,int $id): bool
{    global  $conn;
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