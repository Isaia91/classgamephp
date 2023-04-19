<?php

abstract class Personnage {
	protected $niveau;
	protected $endurance;
	protected $force;
	protected $attaque;
	protected $pv;
	protected $nom;

	public function lvlup(){
		if($this->xp === $this->niveau*10 ){
			$this->niveau++;
			$this->xp =0;
		}
	}
	public function stat(){
		echo "-----------".$this->nom."----------- ".PHP_EOL;
		echo "lvl ".$this->niveau.PHP_EOL;
		echo "endurance ".$this->endurance.PHP_EOL;
		echo "force ".$this->force.PHP_EOL;
		echo "attaque ".$this->attaque.PHP_EOL;
		echo "pv ".$this->pv.PHP_EOL;
		echo "----------------------------".PHP_EOL;
	}

	public function __construct($niveau, $nom) {
		$this->niveau = $niveau;
		$this->nom = $nom;
	}


}