<?php
    include_once './layout/startSession.php'
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/SigninPage.css">
</head>
<body class="d-flex flex-column h-100">
    

    <?php
        include_once "./classes/database.class.php";

        $db = new Database();
        
        if(isset($_POST['email'])){

            $result = $db->signin($_POST['email'], $_POST['password']);
            
            if($result){
                $_SESSION['user'] = $result;
                header("Location: ./index.php");
            }else{
                echo "Sorry, Your email or password is wrong";
            }
        }
    ?>
    <div class="container h-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Sign in</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>