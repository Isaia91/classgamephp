<?php

abstract class Personnage {
	protected $niveau;
	protected $endurance;
	protected $force;
	protected $attaque;
	protected $pv;
	protected $nom;

	public function __construct($niveau, $nom) {
		$this->niveau = $niveau;
		$this->nom = $nom;
	}


}