<?php
    include_once './layout/startSession.php'
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Create Article</title>
    <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">


</head>

<body class="d-flex flex-column h-100">

    
    <?php
        include_once "./layout/header.php";

        if(isset($_POST['new-article'])){
            $newArticle = new Article(NULL, $_POST['new-title'], $_POST['new-article'], NULL, $_SESSION['user']['name']);

            $result = $db->createNewArticle($newArticle);
            if($result){
                header("Location: ./index.php");
            }else{
                echo "Updated failed, try again";
            }
        }

    ?>

    <div class="container"> 
        <div class="row">
            <div class="col sub-header">
                <h2>Create Article</h2>
            </div>
        </div>

        <div class="row">
            <div class="col article">
                <form method="POST" id="create-article-form">
                    <label>Title:</label>
                    <input type="text" name="new-title" class="new-title" id="new-title">

                    <label>Article Text:</label>
                    <textarea name="new-article" id="new-article"></textarea>

                    <input type="submit" class="btn btn-primary" id="publish" value="Publish">
                </form>
            </div>
        </div>
    </div>

    
    <?php
        include_once './layout/footer.php';
    ?>

    <script src="assets/js/createArticle.js"></script>
</body>
</html>