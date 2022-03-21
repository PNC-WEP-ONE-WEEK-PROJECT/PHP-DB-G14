

<?php
    require_once '../models/post.php';
    require_once '../templates/header.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userLog = userLogin($email, $password);
        if(!empty($userLog)){
            $userEmail = $userLog['Email'];
            $userPassword = $userLog['password'];
            if(!empty($email) and !empty($password) and $email == $userEmail and "$password" == $userPassword){
                $SESSION['userId'] = $userLog['userId'];
                header('Location: ../index.php');
            }
            else{
                echo "<p class='text text-danger'>Your password is wrong. Please try again!!!</p>";
            }
        }
        else{
            echo "<h3 class='text text-danger'>Your Email is wrong. Please try again!!!</h3>";
        }
    }
    require_once '../templates/footer.php';
?>