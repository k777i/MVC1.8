<?php
require __DIR__.'/models/photo.php';

$items=Photo_getAll();
//var_dump($items);
require __DIR__.'/views/index.php';