<?php
require __DIR__.'/models/photo.php';

$items=Photo_getAll();

require __DIR__.'/views/index.php';