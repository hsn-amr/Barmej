<?php
    include_once './layout/startSession.php'
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">


</head>

<body class="d-flex flex-column h-100">

    
    <?php
        include_once "./layout/header.php";

        if(isset($_POST['new-profile'])){
            $result = $db->updateUserProfile($_POST['new-profile'], $_SESSION['user']['id']);
            if($result){
                echo "Updated successfully";
            }else{
                echo "Updated failed";
            }
        }

        $userProfile = $db->getUserProfile($_SESSION['user']['id']);
    ?>

    <div class="container"> 
        <div class="row">
            <div class="col sub-header">
                <h2>Edit Profile</h2>
            </div>
        </div>

        <div class="row">
            <div class="col article">
                <span class="author">About You</span>
                <form method="POST">
                    <textarea name="new-profile"><?= $userProfile['profile'] ?></textarea>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>

    
    <?php
        include_once './layout/footer.php';
    ?>
</body>
</html>