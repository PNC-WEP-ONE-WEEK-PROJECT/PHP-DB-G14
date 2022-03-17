<?php
require_once 'database.php';


function createPost($img,$description,$userId)
{
    global $database;
    $statements = $database->prepare("INSERT INTO posts( img,description,userId) VALUES(:img,:description,:userId)");
    $statements->execute([
        ':img' => $img,
        ':description' => $description,
        ':userId' => $userId,
    ]);
    return $statements->rowCount()>0;
}


function updatePost($img,$id,$text)
{
    global $database;
    $statment=$database->prepare("UPDATE  posts SET description= :text,img= :img WHERE postId=:id");
    $statment->execute([
        ':img' => $img,
        ':id' => $id,
        ':text' => $text,
  
    ]);
}
function deletePost($id)
{
    global $database;
    $statment=$database->prepare("DELETE FROM posts WHERE postId=:id");
    $statment->execute([
        ':id' => $id,
    ]);
}

function getAllPost()
{
    global $database;
    $statment = $database->prepare("SELECT* FROM posts ORDER BY postId DESC");
    $statment->execute();
    return $statment->fetchAll();
}
function getPost($id)
{
    global $database;
    $statment = $database->prepare("SELECT* FROM posts WHERE postId=:postId");
    $statment->execute([
        ':postId' => $id,
    ]);
    return $statment->fetch();
}




