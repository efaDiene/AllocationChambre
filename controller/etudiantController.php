<?php
class etudiantController{
protected $ctrl;

    public function ajouterEtudiant(){
       require_once('./vues/vueAjouterEtudiant.php');
    }

    public function modifierEtudiant(){
        require_once('./vues/vueAjouterEtudiant.php');
    }

    public function listerEtudiant(){
        require_once('./vues/vueListeEtudiant.php');
    }

    public function supprimerEtudiant(){
        require_once('./vues/vueListerEtudiant.php');
    }

    public function rechercherEtudiant(){
        require_once('../vues/vueListerEtudiant.php');
    }

}