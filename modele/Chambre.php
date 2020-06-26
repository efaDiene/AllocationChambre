<?php

class Chambre implements IProjet{
    protected $numChambre;
    protected $typeChambre;
	protected $numBatiment;

	
	public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->numChambre=$row['numChambre'];
        $this->typeChambre=$row['typeChambre'];
        $this->numBatiment=$row['numBatiment'];
        
    }

	public function getNumChambre() {
		return $this->numChambre;
	}

	public function setNumChambre($numChambre) {
		this.$numChambre = $numChambre;
	}

	public function getTypeChambre() {
		return this.$typeChambre;
	}

	public function setTypeChambre($typeChambre) {
		this.$typeChambre = $typeChambre;
	}

	public function getNumBatiment() {
		return this.$numBatiment;
	}

	public function setNumBatiment($numBatiment) {
		this.$numBatiment = $numBatiment;
	}

}