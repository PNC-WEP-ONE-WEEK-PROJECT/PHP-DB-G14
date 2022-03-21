<?php 
    session_start();
    if (isset($_SESSION["userId"]) and !empty($_SESSION["userId"])) {
        session_destroy();
    }
?>
<?php require_once "../templates/header.php"; ?>
<div class="global-container  col-5">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Log in to account</h3>
            <div class="card-text">
                <form action="../controllers/login_post.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control form-control-sm"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                         
               </a>
                        <input type="password" name="password" class="form-control form-control-sm"
              id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Signin</button>
 
                    <div class="sign-up">
                        <h6>Don't have an account? </h6>
                        <a href="" class="btn btn-primary " >Create One</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once "../templates/footer.php"; ?>

