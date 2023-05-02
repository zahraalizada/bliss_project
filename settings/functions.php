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


function getData(string $tableName,$id=null){
    global  $conn;

    if ($id==null){
        $sql="SELECT * FROM $tableName";
        $sth = $conn->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);

    }else{
        $sql="SELECT * FROM $tableName WHERE id = ?";
        $sth = $conn->prepare($sql);
        $sth->execute([$id]);
        return $sth->fetchAll(\PDO::FETCH_ASSOC);

    }
}

function getDelete(string $tableName,int $id): bool
{
    global  $conn;
    $query = $conn->prepare("DELETE FROM $tableName WHERE id = ?");
    return (bool)  $query->execute([$id]);
}

function getUpdate(string $tName,array $columnName,array $values,int $id)
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



?>