<?php
class EtudiantLoge extends EtudiantBoursier{
    protected $numeroChambre;
    

    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->numeroChambre=$row['numeroChambre'];
       
    }
}