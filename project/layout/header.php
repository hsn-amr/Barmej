    <?php
        include_once './classes/database.class.php';
        $db = new Database();
        $articles = $db->allArticles();
    ?>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">THEREPOST</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION['user'])){ ?>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./editProfile.php">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./layout/Signout.php">Sign out</a>
                <?php }else{ ?>
                <li class="nav-item">
                <a class="nav-link active" id="signinLink" aria-current="page" href="./SigninPage.php">Sign in</a>
                <?php } ?>
                </li>
            </ul>
        </div>
        </nav>
    </header>