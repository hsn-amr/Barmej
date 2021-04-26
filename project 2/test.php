<?php

include_once 'character.class.php';
include_once 'villain.class.php';
include_once 'hero.class.php';

// test 1 ----------------------------------------
echo 'test 1: ';
$hero = new Hero(300, 200, 'Hassan');
$villain = new Villain(200, 200, 'Ahmed', false);

$result = $hero->startFighting($villain);

echo $result . '<br>';

// test 2 ----------------------------------------
echo 'test 2: ';
$hero = new Hero(200, 100, 'Hassan');
$villain = new Villain(200, 250, 'Ahmed', false);

$result = $hero->startFighting($villain);

echo $result . '<br>';

// test 3 -----------------------------------------
echo 'test 3: ';
$hero = new Hero(200, 100, 'Hassan');
$villain = new Villain(200, 250, 'Ahmed', true);

$result = $hero->startFighting($villain);

echo $result;

?>