<?php
require_once '../models/post.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $date=$_POST['dateTime'];
    $description = $_POST['description'];
    $fileName=$_FILES['img']['name'];
    $folder='../images/'.$fileName;
    move_uploaded_file($_FILES["img"]["tmp_name"], $folder);
        createPost($fileName,$description,$date,1);
        header('location:../views/post_view.php');
}
?>