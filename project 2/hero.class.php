<?php

include_once 'character.class.php';

class Hero extends Character{

    //construct
    function __construct($health, $power, $name){
        parent::__construct($health, $power, $name);
    }

    function startFighting($enemy){

        $enemyHealth = $enemy->getHealth();
        $enemyPower = $enemy->getPower();
        $enemyName = $enemy->getName();
        $escaped = $enemy->getEscape();

        $heroHealth = $this->getHealth();
        $heroPower = $this->getPower();
        $heroName = $this->getName();

        if($escaped){
            return "{$enemyName} has escaped ...";
        }else{
            while(true){
                $enemyHealth -= $heroPower;
                if($enemyHealth <= 0) {return "{$heroName} wins ...";}
                
                $heroHealth -= $enemyPower;
                if($heroHealth <= 0) {return "{$enemyName} wins ...";}
            }
        }
    }
}

?>