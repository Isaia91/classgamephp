<?php

class Joueur extends Personnage {

public function __construct($niveau, $nom) {
		parent::__construct($niveau, $nom);
		
		$this->endurance = $this->niveau * 2;
		$this->force = $this->niveau * 2;
		$this->attaque = $this->force * 2;
		$this->pv = $this->endurance * 5;
	} 

		public function combat($mob) {
		$this->ennemie = $mob;
		if($mob->niveau > $this->niveau) {
			echo "Tu es trop nul pour l'affronter".PHP_EOL;
		}
		else{
			$mob->pv =$mob->pv - $this->attaque;
			$this->pv=$this->pv - $mob->attaque;
			if ($mob->pv <= 0) {
				echo 'le joueur a gagné';
			}elseif ($this->pv <= 0) {
				echo 'le mob a gagné';
			}
		print_r($this->pv);	
		}
	}
}