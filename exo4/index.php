<?php

require_once 'models/Personnage.php';
require_once 'models/Joueur.php';
require_once 'models/Mob.php';

$joueur = new Joueur('1', 'Lulu');
$mob = new Mob('1','Goblinn');

//print_r($joueur).PHP_EOL;
//print_r($mob).PHP_EOL;

$combat = new Joueur('1', 'Bownlin');
$combat->combat($mob);

print_r($combat).PHP_EOL;