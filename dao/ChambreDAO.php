<?php

class ChambreDAO extends manager{

    public function __construct(){
        $this->nomTable="chambre";
        $this->nomClass="Chambre";
        $this->cle="idChambre";
    }

    public function Add($obj){
        $sql="INSERT into `$this->nomTable` (`numChambre`, `numBatiment`, `typeChambre`) VALUES ('$obj[0]','$obj[1]','$obj[2]') ";
        return $this->executeMaj($sql)!=0;
    }
    
    public function Modify($obj){
        $sql="UPDATE $this->nomTable SET `numChambre`='{$obj['numChambre']}',`numBatiment`='{$obj['numBatiment']}',`typeChambre`='{$obj[typeChambre]}' WHERE `idChambre`='{$obj['idChambre']}'";
        return $this->executeSelect($sql)!=0;
    }

    

}    