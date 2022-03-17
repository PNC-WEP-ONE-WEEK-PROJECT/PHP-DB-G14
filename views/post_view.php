<?php require_once "models/post.php";?>
<div class="add-item">
    <input type="text" placeholder="What's on your mind sreymao?">
    <span><a href="../views/create_form.php">Post</a></span>
</div>

<div class="containers">

    <?php
        $allPost = getAllPost();
        foreach ($allPost as $post):
    ?>

    <div class="card-container">
        <div class="card1">
            <div class="card1-img">
                <img src="../images/female.png" alt="">
                <h3>Sreymao Vorn</h3>
            </div>

            <div class="edit">
               
                <a href=""><i class="fa fa-pencil"></i></a>
                <a href="controllers/delete_post.php?id=<?php echo $post['postId']?>"><i class="fa fa-trash"></i></a>
            </div>
        </div>
        <div class="card2-p">
            <h3 class="text-capitalize"><?=$post['description']?></h3>
        </div>

        <div class="card2-image">
            <img  src="../images/<?=$post['img']?>" alt="" width="200px">
        </div>
        <hr>
        <div class="card2-comment">
            <i class="fa fa-thumbs-o-up" style="font-size:36px">like</i>
            <i class="fa fa-commenting-o" style="font-size:36px">comment</i>
        </div>
        
    </div>

    <?php
endforeach;
?>
    
</div>

