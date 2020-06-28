<?php

class EtudiantDAO extends manager{

    public function __construct(){
        $this->nomTable="etudiant";
        $this->nomClass="Etudiant";
        $this->cle="matricule";
    }

    public function Add($obj){
        $sql="INSERT INTO `$this->nomTable` (`matricule`, `nom`, `prenom`, `email`, `tel`, `dateNaissance`,`adresse`) VALUES ('$obj[0]','$obj[1]','$obj[2]','$obj[3]','$obj[4]','$obj[5]','$obj[6]') ";
        return $this->executeMaj($sql)!=0;
    }

    public function AddEBL($obj){
        $sql="INSERT INTO `$this->nomTable` (`matricule`, `nom`, `prenom`, `email`, `tel`, `dateNaissance`,`typeBourse`,`logement`,`chambre`) VALUES ('$obj[0]','$obj[1]','$obj[2]','$obj[3]','$obj[4]','$obj[5]','$obj[6]','$obj[7]','$obj[8]') ";
        return $this->executeMaj($sql)!=0;
    }
    public function AddEBNL($obj){
        $sql="INSERT INTO `$this->nomTable` (`matricule`, `nom`, `prenom`, `email`, `tel`, `dateNaissance`,`typeBourse`,`adresse`) VALUES ('$obj[0]','$obj[1]','$obj[2]','$obj[3]','$obj[4]','$obj[5]','$obj[6]','$obj[7]') ";
        return $this->executeMaj($sql)!=0;
    }
    
    public function Modify($obj){
        $sql="UPDATE $this->nomTable set `numChambre`='$obj[0]',`numBatiment`='$obj[1]',`typeChambre`='$obj[2]' WHERE `numChambre`='$obj[0]'";
        return $this->executeSelect($sql);
    }

    


}