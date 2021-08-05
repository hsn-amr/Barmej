<?php
    include_once './layout/startSession.php'
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
    <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">


</head>

<body class="d-flex flex-column h-100">

    
    <?php
        include_once "./layout/header.php";
        $article = $articles[$_GET['id']];
    ?>

    <div class="container"> 
        <div class="row">
            <div class="col sub-header">
                <h2><?= $article->title ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <span class="author"><?= $article->author ?></span>
                <span class="date"><?= $article->date ?></span>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <pre class="article-fill"><?= $article->article ?></pre>
            </div>
        </div>
    </div>

    
    <?php
        include_once "./layout/footer.php"
    ?>
</body>
</html>