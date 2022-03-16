<?php
require_once 'database.php';


function createPost($img,$description,$date,$userId)
{
    global $database;
    $statements = $database->prepare("INSERT INTO posts( img,description,dateTime,userId) VALUES(:img,:description,:dateTime,:userId)");
    $statements->execute([
        ':img' => $img,
        ':description' => $description,
        ':dateTime' => $date,
        ':userId' => $userId,
    ]);
    return $statements->rowCount()>0;
}

function updatePost($post)
{
    global $database;
    $text=$post['text'];
    $id=$post['id'];
    $statment=$database->prepare("UPDATE  posts SET text= :text WHERE Id=:id");
    $statment->execute([
        ':text' => $text,
        ':id' => $id,
    ]);
}
function deletePost($id)
{
    global $database;
    $statment=$database->prepare("DELETE FROM posts WHERE Id=:id");
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

