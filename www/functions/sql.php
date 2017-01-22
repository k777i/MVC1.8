<?php

function sqlConnect(){
    $connect = mysqli_connect("localhost", "root", "", "test_db");
    return $connect;
}

function sqlQuery($sql){
    $connect = sqlConnect();
    $query = mysqli_query($connect, $sql);
    $result = [];
    while($row = mysqli_fetch_assoc($query)){
        $result[]=$row;
    }
    return $result;
}