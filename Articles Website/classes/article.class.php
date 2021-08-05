<?php


class Article{
    public $id; 
    public $title; 
    public $article; 
    public $date; 
    public $author;

    function __construct($id, $title, $article, $date, $author){
        $this->id = $id;
        $this->title = $title;
        $this->article = $article;
        $this->date = $date;
        $this->author = $author;
    }
    
}

?>