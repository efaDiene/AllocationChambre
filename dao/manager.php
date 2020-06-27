<?php

abstract class manager implements IDAO{
    private $PDO=null;
    protected $nomTable;
    protected $nomClass;
    
    private function connexion(){
        if ($this->PDO==null) {
            try {
                $this->PDO= new PDO('mysql:host=127.0.0.1;dbname=allocationchambre','root','');
                $this->PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                die("Erreur lors de la connexion au serveur");
            }
            
        }

    }
    private function fermerConnexion(){
        if ($this->PDO!=null) {
            $PDO=null;
        }
    }
    
    public function executeSelect($req){
        $this->connexion();
        $result= $this->PDO->query($req);
        
        $data=[];
        foreach($result as $row){
            
            $data[]= new $this->nomClass($row);
        }

        $this->fermerConnexion();

        return $data;

    }

    public function executeMaj($req){
        $this->connexion();

        $nbLigne= $this->PDO->exec($req);

        $this->fermerConnexion();

        return $nbLigne;
    }

    public function Delete($id){
        $sql="DELETE FROM `$this->nomTable` WHERE `numChambre`='$id'";        
        $result=$this->executeMaj($sql);
        return $result!=0;
    }

    public function Select(){
        $sql="SELECT * FROM `$this->nomTable`";        
        $result= $this->executeSelect($sql);
        return $result;
    }

    public function Search($cleDeRecherche,$value){
        
        $sql="SELECT * FROM `$this->nomTable` WHERE `$cleDeRecherche`='$value'";
        
        $result= $this->executeSelect($sql);            
        return $result;    
        
    }



    
}