<?php
class etudiantController{
    protected $ctrl;
    protected $dao;
    protected $dataView;

    private function matricule($prenom,$nom){
        $mat=$nom[0].$nom[1].$prenom[0].$prenom[1].rand(1000,9999);
        
        return $mat;
    }

    public function ajoutE(){
        if(isset($_POST['valider'])){
            extract($_POST);
            $this->dao=new EtudiantDao();
            $mat=$this->matricule($prenom,$nom);
            if ($typeBourse=="Bourse-entiere" || $typeBourse=="Demi-Bourse") {
                
                if ($logement=="loge") {
                    $this->dao->AddEBL([
                        $mat,
                        $nom,
                        $prenom,
                        $email,
                        $tel,
                        $dateNaissance,
                        $typeBourse,
                        $logement,
                        $numChambre
                    ]);
                }else {
                    $this->dao->AddEBNL([
                        $mat,
                        $nom,
                        $prenom,
                        $email,
                        $tel,
                        $dateNaissance,
                        $typeBourse,
                        $adresse,
                    ]);
                }
               
            
            }else{
                $this->dao->Add([
                    $mat,
                    $nom,
                    $prenom,
                    $email,
                    $tel,
                    $dateNaissance,
                    $adresse
                ]);
            }
            
            $this->listerEtudiant();
            
         }else{
            echo "erreur";
         }
    }
      
  

    public function ajouterEtudiant(){
       require_once('./vues/vueAjouterEtudiant.php');
    }

    public function modifierEtudiant(){
        require_once('./vues/vueAjouterEtudiant.php');
    }

    public function listerEtudiant(){
        $this->dao= new EtudiantDAO();
        $etudiant=$this->dao->Select();
        $this->dataView["etudiant"]=$etudiant;
        extract($this->dataView);
        require_once('./vues/vueListeEtudiant.php');
    }

    public function supprimerEtudiant(){
        $this->dao = new EtudiantDAO();
        $this->dao->Delete("qsss1756");
        
        $this->listerEtudiant();
    }

    public function rechercherEtudiant(){
        require_once('../vues/vueListerEtudiant.php');
    }

}