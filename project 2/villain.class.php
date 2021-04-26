<?php

include_once 'character.class.php';

class Villain extends Character{
    private $escape;

    //construct
    function __construct($health, $power, $name, $escape){
        parent::__construct($health, $power, $name);
        $this->escape = $escape;
    }

    //setters
    function setEscape($escape){
        $this->escape = $escape;
    }

    //getters
    function getEscape(){
        return $this->escape;
    }
}

?>