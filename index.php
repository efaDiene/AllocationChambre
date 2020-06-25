<?php
spl_autoload_register(function($class){
    $chemin="./modele/".$class.".php";
    require_once($chemin);
});


$etu1= new Etudiant([
    "prenom"=>"nfd",
    "nom"=>"diene",
    "dateNaissance"=>"nfd",
    "tel"=>"789030204",
    "email"=>"email",
]);
var_dump($etu1);
$etu1->setMatricule(102);
echo $etu1->getMatricule();

$etu2= new EtudiantNonBoursier([
    "adresse"=>"KM"
]);
var_dump($etu2);

$etu3= new EtudiantLoge([
    "numeroChambre"=>"bbc",
    "typedeBourse"=>"cc"
]);
var_dump($etu3);
