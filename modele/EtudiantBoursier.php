<?php
class EtudiantBoursier extends Etudiant{
    protected $typedeBourse;

    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->typedeBourse=$row['typedeBourse'];
       
    }

}