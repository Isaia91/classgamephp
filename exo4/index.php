<?php

require_once 'models/Personnage.php';
require_once 'models/Joueur.php';
require_once 'models/Mob.php';

$joueur = new Joueur('1', 'Lulu');
$mob = new Mob('1','Goblin');

print_r($joueur);
print_r($mob);

$combat = new Joueur('1', 'Bownlin');
$combat->combat($mob);

print_r($joueur);