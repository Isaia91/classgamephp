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
			die();
		}
		else{
			while ($mob->pv <= 0 || $this->pv <= 0) {
				echo'dans le while';
				$mob->pv =$mob->pv - $this->attaque;			
				$mob->pv =$mob->pv - $this->attaque;
				print_r($this->pv).PHP_EOL;	

			}
			if ($mob->pv <= 0) {
				echo 'le joueur a gagné';
			}
			elseif ($this->pv <= 0) {
				echo 'le mob a gagné'; 
			}
		}
		}
	}
