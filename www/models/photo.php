<?php
require_once __DIR__.'/../functions/sql.php';

function Photo_getAll()
{
    $sql = "SELECT * FROM images";
    return sqlQuery($sql);
}

function Photo_insert($data){

}