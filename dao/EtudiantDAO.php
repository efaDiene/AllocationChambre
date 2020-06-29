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
        $sql="UPDATE $this->nomTable set `nom`='{$obj['nom']}',`prenom`='{$obj['prenom']}',`email`='{$obj['email']}',`tel`='{$obj['tel']}',`dateNaissance`='{$obj['dateNaissance']}',`adresse`='{$obj['adresse']}' WHERE `matricule`='{$obj['matricule']}'";
        return $this->executeSelect($sql);
    }

    public function ModifyEBL($obj){
        $sql="UPDATE $this->nomTable set `nom`='{$obj['nom']}',`prenom`='{$obj['prenom']}',`email`='{$obj['email']}',`tel`='{$obj['tel']}',`dateNaissance`='{$obj['dateNaissance']}',`typeBourse`='{$obj['typeBourse']}',`logement`='{$obj['logement']}',`adresse`='{$obj['adresse']}' WHERE `matricule`='{$obj['matricule']}'";
        echo $sql;
        return $this->executeSelect($sql);
    }

    public function ModifyEBNL($obj){
            $sql="UPDATE $this->nomTable set `nom`='{$obj['nom']}',`prenom`='{$obj['prenom']}',`email`='{$obj['email']}',`tel`='{$obj['tel']}',`dateNaissance`='{$obj['dateNaissance']}',`typeBourse`='{$obj['typeBourse']}',`adresse`='{$obj['adresse']}' WHERE `matricule`='{$obj['matricule']}'";
            return $this->executeSelect($sql);
    }
}