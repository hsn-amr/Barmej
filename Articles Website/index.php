<?php
    include_once './layout/startSession.php'
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">


</head>

<body class="d-flex flex-column h-100">

    
    <?php 
        include_once './layout/header.php';

        if(!isset($_SESSION['user'])){
    ?>
    <div class="container">
        <div class="row">
            <h3>Sorry, you must sign in fisrt</h3>
        </div>
    </div>
    <?php
        }else{
    ?>

    <div class="container"> 
        <div class="row">
            <div class="col sub-header d-flex justify-content-between">
                <h3 >Reports</h3>
                <button type="button" class="btn btn-primary" id="new-post">New Post</button>
            </div>
        </div>
        <?php if(!$articles) { ?>
        <div class="row">
            <h4>There is no article</h4>
        </div>
        <?php }else{ for($i = 0; $i<sizeof($articles); $i++){ ?>
        <div class="row" id="article">
            <div class="col article article-index">
                <h3 class="title"><?= $articles[$i]->title; ?></h3>
                <p class="article-part"><?= $articles[$i]->article; ?></p>
                <span class="author"><?= $articles[$i]->author; ?></span>
                <span class="date"><?= $articles[$i]->date; ?></span>
            </div>
        </div>
        <?php } } ?>
    </div>

    
    <?php
        }
        include_once './layout/footer.php'
    ?>

    <script src="assets/js/scripts.js"></script>
</body>
</html>