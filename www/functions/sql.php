<?php

function sqlConnect(){
    return mysqli_connect("localhost", "root", "", "test_db");
}

function sqlQuery($sql){
    $query = mysqli_query(sqlConnect(), $sql);
    $result = [];
    while($row = mysqli_fetch_assoc($query)){
        $result[]=$row;
    }
    return $result;
}

function sqlExec($sql){
    mysqli_query(sqlConnect(),$sql);

}