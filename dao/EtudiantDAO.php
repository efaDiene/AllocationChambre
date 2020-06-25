<?php

class EtudiantDAO extends manager{

    public function __construct{
        $this->nomTable="etudiant";
    }

    public function Add($obj){
        $sql="insert into etudiant values "
    }
    
    public function Modify($obj){
        $sql="Update etudiant set "
    }

    


}