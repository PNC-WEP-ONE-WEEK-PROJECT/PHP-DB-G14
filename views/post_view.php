<?php 
require_once "models/post.php";
?>
<nav class="navbar navbar-light  d-flex justify-content-evently shadow-sm  rounded ">
    <div class="serch col-3 d-flex">
        <a class="navbar-brand" href="#"><img src="../images/facebook.png" width="45" height="45" class="d-inline-block align-top mx-3" alt=""></a>
        <input type="text" class="form-control my-2" placeholder="Search Facebook">  
    </div>
    <div class="home-page col-6 ">
        <a href=""><img src="../images/home.svg" width="45" height="45" class="ml-5"alt=""></a>
        <a href=""><img src="../images/friends.png" width="45" height="45" class="ml-5" alt=""></a>
        <a href=""><img src="../images/icon.png" width="45" height="45" class="ml-5" alt=""></a>
    </div>
    <div class="sing-in">
        <a href=""><img src="../images/icon.png" width="45" height="45" alt=""></a>
    </div>
</nav>
</div>
<div class="row m-3 ">
    <div class="col-3  ml-3">
           <div class="img1 d-flex">
               <a href=""><img src="../images/icon.png" alt=""></a>
               <h5 class="m-2">sreymov</h5>
            </div>  
            <div class="img2 d-flex">
                <a href="https://www.google.com/search?q=weather&rlz=1C1BNSD_enKH988KH988&oq=weather&aqs=chrome..69i57j0i131i433i512l2j0i131i433i457i512j0i402j46i512j0i512j0i131i433j0i131i433i512j0i512.3200j1j15&sourceid=chrome&ie=UTF-8"><img src="../images/sun.png" alt=""></a>
                <h5 class="m-2">weather</h5>
            </div>      
    </div>
    <div class="col-6">
        <div class="d-flex justify-content-between">
            <span class="border p-2 rounded ">Do you want to post?</span>
            <button type="button" class="btn btn-primary col-2" data-toggle="modal" data-target="#myModal">Post</button>
        </div>
        <?php
        $allPost = getAllPost();
        foreach ($allPost as $post):
        ?>
        <div class="card my-3">
            <div class="card-header">
                <div class="btn dropleft show d-flex justify-content-end ">
                    <a style="text-decoration: none" class="position-absolute top-0 start-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h1>...</h1></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="views/edit_view.php?id=<?php echo $post['postId']?>">edit</a>
                        <a class="dropdown-item" href="controllers/delete_post.php?id=<?php echo $post['postId']?>">delete</a>
                    </div>
                </div >
                    <div class="user d-flex ">
                        <div class="img">
                            <a href=""><img src="../images/icon.png" alt=""></a>
                        </div>
                      
                        <div class="date ml-3">
                            <h5>Sreymao Vorn</h5>
                            <p><?php echo $post['dateTime'] ?></p>
                        </div>
                      
                    </div>
                   
                </div>
                <div class="card-body">
                    <p class="text-capitalize"><?=$post['description']?></p>
                    <img class="card-img-top"  src="../images/<?=$post['img']?>" alt="" width="200px">
                </div>
                <div class="card-footer">

                    <div class="list-group no-border">
                        <?php
                            $id=$post['postId'];
                            $like = getNumberlike($id);
                            echo $like['likeNumber'];
                        ?>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <form action="controllers/like_post.php" method="post" >
                            <input type="hidden" name="postId" value="<?php echo $post['postId']?>">
                            <button type="submit" class="btn btn-light text-primary fa fa-thumbs-o-up mt-3">like</button>
                        </form>
                        
                        <a href="views/comment_view.php?id=<?php echo $post['postId']?> " class="text-decoration-none m-3">comments</a>

                    </div>
                    <div class="card p-3 my-3 ">
                    <?php                 
                    if($id!=null){

                        $getComments= getcomment($id);  
                            foreach($getComments as $comment){
                                ?>
                                <div class="d-flex justify-content-between">
                                    <div class="text">
                                        <p><?=$comment['description'] ?>;</p>
                                    </div>
                                </div>
                               
                                <?php
                                }
                    }
                    ?>
                    </div>
                </div>
                
                 </div>
                 <?php endforeach ?>
    </div>
</div>
