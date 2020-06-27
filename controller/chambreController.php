<?php
require_once("./dao/ChambreDAO.php");
require_once("./modele/Chambre.php");
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
           $numC=$numBatiment."0";
        }elseif(strlen($numBatiment)==1) {
           $numC=$numBatiment."00";
        }
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

    public function modifierChambre(){
        require_once('./vues/vueAjouterChambre.php');
    }

    public function listerChambre(){
        $this->dao= new chambreDAO();
        $chambre=$this->dao->Select();
        $this->dataView["chambre"]=$chambre;
        extract($this->dataView);
        require_once('./vues/vueListeChambre.php');
    }

    public function supprimerChambre(){
        $this->dao = new chambreDAO();
        $this->dao->Delete(800);
        
        $this->listerChambre();
    }

}