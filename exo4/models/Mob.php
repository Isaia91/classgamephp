<?php

class Mob extends Personnage {
	public function __construct($niveau, $nom) {
		parent::__construct($niveau, $nom);
		
		$this->endurance = $this->niveau;
		$this->force = $this->endurance;
		$this->attaque = $this->force * 2;
		$this->pv = $this->endurance * 5;
	} 
}