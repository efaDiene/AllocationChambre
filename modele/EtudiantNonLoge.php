<?php
class EtudiantNonLoge extends EtudiantBboursier{
    protected $adresse;

	public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->adresse=$row['adresse'];
       
    }

	public protected getAdresse() {
		return $this.adresse;
	}

	public void setAdresse( $adresse) {
		$this.adresse = $adresse;
	}

    
}