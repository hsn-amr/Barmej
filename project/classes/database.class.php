<?php

include_once './classes/article.class.php';

class Database{
    public $connect;

    function __construct(){
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $databaseName = "articles";

        $this->connect = new mysqli($serverName, $userName, $password, $databaseName);
        // here we define the type of chars (it si used for Arabic)
        $this->connect->set_charset("utf8");

        // if has error message, will end the program and show message
        if($this->connect->connect_error){
            die("connaction failed: {$this->connect->connect_error}");
        }
    }

    function signin($email, $password){

        $SQLStatment = $this->connect->prepare("SELECT name, email, id FROM users WHERE email = ? AND password = ?");
        $SQLStatment->bind_param("ss", $email, $password);
        $SQLStatment->execute();
        $result = $SQLStatment->get_result();

        if($result->num_rows == 0){
            return false;
        }else{
            // Why here we did not use "while"? because the result must be only one record
            return $result->fetch_array(MYSQLI_ASSOC);
        }

    }

    function allArticles(){
        $SQLStatment = $this->connect->prepare("SELECT * FROM articles ORDER BY `date` DESC");
        $SQLStatment->execute();
        $result = $SQLStatment->get_result();

        if($result->num_rows == 0){
            return false;
        }else{
            $results = array();

            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $results[] = new Article($row['id'], $row['title'], $row['article'], $row['date'], $row['author']);
            }
            return $results;
        }
    }

    function getUserProfile($id){
        $SQLStatment = $this->connect->prepare("SELECT profile FROM users WHERE id = ?");
        $SQLStatment->bind_param("s", $id);
        $SQLStatment->execute();
        $result = $SQLStatment->get_result();
        
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    function updateUserProfile($newProfile, $id){
        $SQLStatment = $this->connect->prepare("UPDATE users SET profile = ? WHERE id = ?");
        $SQLStatment->bind_param('ss', $newProfile, $id);
        // If done correctly, will return true otherwise will retun false
        return $SQLStatment->execute();
    }

    function createNewArticle($article){
        $SQLStatment = $this->connect->prepare("INSERT INTO articles (`id`, `title`, `article`, `author`) VALUES (NULL,?,?,?) ");
        $SQLStatment->bind_param("sss", $article->title, $article->article, $article->author);
        // If done correctly, will return true otherwise will retun false
        return $SQLStatment->execute();
    }
}

?>