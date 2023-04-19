<?php

class Joueur extends Personnage {
	//protected $ennemie

	protected int $xp;
	public function __construct($niveau, $nom) {
			parent::__construct($niveau, $nom);
			
			$this->endurance = $this->niveau * 2;
			$this->force = $this->niveau * 2;
			$this->attaque = $this->force * 2;
			$this->pv = $this->endurance * 5;
			$this->xp=0;
		} 

	
	public function combat($mob) {
		//$this->ennemie = $mob;
		if($mob->niveau > $this->niveau) {
			echo "Tu es trop nul pour l'affronter".PHP_EOL;
		}
		else{
			echo "==============Combat==============".PHP_EOL;
						echo "xp ".$this->xp.PHP_EOL;
			echo "Le combat commence".PHP_EOL;
			while ($mob->pv > 0 && $this->pv > 0) {
				$mob->pv =$mob->pv - $this->attaque;	
				if ($mob->pv <= 0) {
				break;
			}
			if ($this->pv <= 0) {
				break;
			}		
				$this->pv =$this->pv - $mob->attaque;
				
				$this->stat();
				$mob->stat();
			}
			if ($mob->pv <= 0) {
				echo 'le joueur a gagné'.PHP_EOL;
				//echo "xp ".$this->xp.PHP_EOL;
				$this->xp +=$mob->niveau;
				$this->pv =$this->pv = $this->endurance * 5;
				$this->lvlup();
				$this->stat();
				echo "xp ".$this->xp.PHP_EOL;
				echo "==============/Combat==============".PHP_EOL;
				

			}
			elseif ($this->pv <= 0) {
				echo 'le mob a gagné'.PHP_EOL;
				$mob->stat();
				echo "==============/Combat==============".PHP_EOL;
			}
		}
	}
}
