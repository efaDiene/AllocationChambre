<?php

class EtudiantDAO extends manager{

    public function __construct(){
        $this->nomTable="etudiant";
        $this->nomClass="Etudiant";
    }

    public function Add($obj){
        $sql="INSERT into `$this->nomTable` (`numChambre`, `numBatiment`, `typeChambre`) VALUES ('$obj[0]','$obj[1]','$obj[2]') ";
        return $this->executeMaj($sql)!=0;
    }
    
    public function Modify($obj){
        $sql="UPDATE $this->nomTable set `numChambre`='$obj[0]',`numBatiment`='$obj[1]',`typeChambre`='$obj[2]' WHERE `numChambre`='$obj[0]'";
        return $this->executeSelect($sql);
    }

    


}