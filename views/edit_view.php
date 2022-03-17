<?php
require_once('../models/post.php');
?>

<div class="container p-4">
    <?php
        isset($_GET['id']) ? $id = $_GET['id'] :$id=null;
        $getPost=getPost($id);
        $text = $getPost['description'];
    ?>


    <form action="../controllers/edit_post.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="postId" value="<?php echo $id ?>">
        </div>
        <div>
            <input type="text"  name="description" value="<?php echo $text ?>">
        </div>
        <div>
            <input type="file" name="img" >
        </div>
        <div>
            <input type="date" name="dateTime">
        </div>
        <button type="submit" name="upload" id="upload">submit</button>
    </form>
 
</div>

<div class="container-form">
    
</div>
