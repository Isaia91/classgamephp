<?php

require_once 'models/Personnage.php';
require_once 'models/Joueur.php';
require_once 'models/Mob.php';


$mob = new Mob('1','Goblin');

//print_r($joueur).PHP_EOL;
//print_r($mob).PHP_EOL;

$joueur= new Joueur('1', 'Gamer');
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));
$joueur->combat(new Mob('1','Goblin'));


echo "==============Stats joeur==============".PHP_EOL;
print_r($joueur).PHP_EOL;
echo "==============Stats joeur==============".PHP_EOL;