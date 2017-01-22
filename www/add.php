<?php
require __DIR__.'/functions/file.php';

if(!empty($_POST)) {
    $data = [];
    if(!empty($_POST['title']) ){
        $data['title'] = $_POST['title'];
    }
    if(!empty($_FILES)) {
        $res = File_upload('image');
        if(false !== $res){
            $data['image'] = $res;
        }
    }

}

require_once __DIR__.'/views/add.php';