<?php
require_once('./modele/Etudiant.php');
require_once('./modele/EtudiantNonBoursier.php');


$etu1= new Etudiant();
var_dump($etu1);
$etu1->setMatricule(102);
echo $etu1->getMatricule();

$etu2= new EtudiantNonBoursier();
var_dump($etu2);