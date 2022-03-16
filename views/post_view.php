<?php require_once "templates/header.php";?>
<?php require_once "models/post.php"; ?>

<div class="container">
    <div class="addItem">
        <a href="../views/create_form.php" class="btn btn-primary">+add</a>
    </div>
    <?php
        $allPost = getAllPost();
        foreach ($allPost as $post):
    ?>
    <div class="card">
        <div class="card-body">
            <h3 class="text-capitalize"><?=$post['description']?></h3>
            <p><?= $post['dateTime']?></p>
            <div class="delete-edit">
                <a href=""><i class="fa fa-pencil"></i></a>
                <a href="" ><i class="fa fa-trash"></i></a>
            </div>
            <div class="img">
                <img  src="../images/<?=$post['img']?>" alt="" width="200px">
            </div>
        </div>
    </div>
</div>   
<?php
endforeach;
?>
<?php require_once "templates/footer.php";?>