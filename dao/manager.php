<?php

abstract class manager implements IDAO{
    private $PDO=null;
    protected $nomTable;
    
    private function connexion(){
        if ($this->PDO=null) {
            try {
                $PDO= new PDO("mysql:host=localhost;dbname=allocationchambre","root","")
                
            } catch (Exception $e) {
                die("Erreur lors de la connexion au serveur");
            }
            
        }

    }
    private function fermerConnexion(){
        if ($this->PDO!=null) {
            $PDO=null
        }
    }
    
    public function executeSelect($req){
        $this->connexion();

        $nbLigne= $this->PDO->exec();

        $this->fermerConnexion();

        return $nbLigne;

    }

    public function executeMaj($req){
        $this->connexion();

        $this->fermerConnexion();
    }

    public function Delete($id){
        $sql="delete from $this->nomTable where matricule=`$id`"
    }

    public function Select(){
        $sql="select * from $this->nomTable";
    }

    public function SearchByID($id){
        $sql="select * from $this->nomTable where matricule=`$id`";
    }
}