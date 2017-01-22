<?php

function Photo_getAll()
{
    $connect = mysqli_connect("localhost", "root", "", "test_db");
    $sql = "SELECT * FROM images";
    $query = mysqli_query($connect, $sql);
    $result = [];

    while($row = mysqli_fetch_assoc($query)){
        $result[]=$row;
    }

    return $result;

}
