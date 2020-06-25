<?php

class Chambre implements IProjet{
    protected $numChambre;
    protected $typeChambre;
	protected $numBatiment;
	protected $etudiant1;
	protected $etudiant2;

	
	public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->numChambre=$row['typeChambre'].$row['numBatiment'];
        $this->typeChambre=$row['typeChambre'];
        $this->numBatiment=$row['numBatiment'];
        
    }

	public protected getNumChambre() {
		return this.$numChambre;
	}

	public void setNumChambre($numChambre) {
		this.$numChambre = $numChambre;
	}

	public protected getTypeChambre() {
		return this.$typeChambre;
	}

	public void setTypeChambre($typeChambre) {
		this.$typeChambre = $typeChambre;
	}

	public protected getNumBatiment() {
		return this.$numBatiment;
	}

	public void setNumBatiment($numBatiment) {
		this.$numBatiment = $numBatiment;
	}

}