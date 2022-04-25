<?php

if(!empty($_FILES)){
    $name=$_FILES['fichier']['name'];
    $type=$_FILES['fichier']['type'];

    $files_tmp_name =$_FILES['fichier']['tmp_name'];
    $file_dest = 'files/'.$name ;
    $file_dest2 = 'files2/'.$name ;

    move_uploaded_file($files_tmp_name,$file_dest);
}