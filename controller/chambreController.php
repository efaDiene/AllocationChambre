<?php

class ChambreController{
    protected $ctrl;
    protected $dao;
    protected $dataView;

    public function __contruct(){
        
    }

    private function numC($numBatiment){
        
        if (strlen($numBatiment)==3) {
           $numC=$numBatiment;
        }elseif(strlen($numBatiment)==2) {
           $numC="0".$numBatiment;
        }elseif(strlen($numBatiment)==1) {
           $numC="00".$numBatiment;
        }elseif(strlen($numBatiment)>3) {
           $numC=$numBatiment[0].$numBatiment[1].$numBatiment[2];
        }
        $numC=$numC."-".rand(1000,9999);
        return $numC;
    }

    public function ajouterCh(){

        if(isset($_POST['valider'])){
           extract($_POST);
           $this->dao=new ChambreDao();
            
           $numC=$this->numC($numBatiment);
           $this->dao->Add([
               $numC,
               $numBatiment,
               $chambre
               
           ]);
           $this->listerChambre();
            
        }else{
           echo "erreur";
        }
        
     }

    public function ajouterChambre(){      
        require_once('./vues/vueAjouterChambre.php');
    }

    public function modifierCh(){

        if(isset($_POST['valider'])){
            extract($_POST);
            $this->dao=new ChambreDao();
             
            $numC=$this->numC($numBatiment);
            $this->dao->modify([
                $numC,
                $numBatiment,
                $chambre
                
            ]);
            $this->listerChambre();
            
        }else{
            echo "erreur";
        }
    }

    public function modifierChambre(){
        extract($_POST);
        $this->dao=new ChambreDao();
             
        $numC=$this->numC($numBatiment);
        $this->dao->modify($_POST);
        $this->listerChambre();
        
    }

    public function listerChambre(){
        $this->dao= new ChambreDAO();
        $chambre=$this->dao->Select();
        $this->dataView["chambre"]=$chambre;
        extract($this->dataView);
        require_once('./vues/vueListeChambre.php');
    }

    public function supprimerChambre(){
        $this->dao = new ChambreDAO();
        $this->dao->Delete($_POST);
        
        $this->listerChambre();
    }

}