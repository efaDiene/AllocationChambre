<?php
class ChambreController{
    protected $ctrl;

    public function ajouterChambre(){
        require_once('./vues/vueAjouterChambre.php');
    }

    public function modifierChambre(){
        require_once('./vues/vueAjouterChambre.php');
    }

    public function listerChambre(){
        require_once('./vues/vueListeChambre.php');
    }

    public function supprimerChambre(){
        require_once('./vues/vueListeChambre.php');
    }

}