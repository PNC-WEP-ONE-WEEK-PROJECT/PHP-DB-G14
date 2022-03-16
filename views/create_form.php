
<div class="container-form">
    <form action="../controllers/create_post.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" placeholder="description" name="description">
        </div>
        <div>
            <input type="file" name="img" value="">
        </div>
        <div>
            <input type="date" name="dateTime">
        </div>
        <button type="submit" name="upload" id="upload">submit</button>
    </form>
</div>
