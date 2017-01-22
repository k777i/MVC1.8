<?php
require __DIR__.'/../functions/sql.php';
function Photo_getAll()
{
    $sql = "SELECT * FROM images";
    return sqlQuery($sql);
}
