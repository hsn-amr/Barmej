<?php

class Character{
    private $health;
    private $power;
    private $name;

    //construct
    function __construct($health, $power, $name){
        $this->health = $health;
        $this->power = $power;
        $this->name = $name;
    }

    // setters
    function setHealth($health){
        $this->health = $health;
    }
    function setPower($power){
        $this->power = $power;
    }
    function setName($name){
        $this->name = $name;
    }

    //getters
    function getHealth(){
        return $this->health;
    }
    function getPower(){
        return $this->power;
    }
    function getName(){
        return $this->name;
    }
}

?>