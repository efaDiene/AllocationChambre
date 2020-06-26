<?php
/*spl_autoload_register(function($class){
    $chemin="./modele/".$class.".php";
    $cheminDAO="./dao/".$class.".php";
    $cheminLibs="./libs/".$class.".php";

    if(file_exists($chemin)){
        require_once($chemin);
    }elseif (file_exists($cheminDAO)) {
        require_once($cheminDAO);
    }
    elseif (file_exists($cheminLibs)) {
        require_once($cheminLibs);
    }
    
});
*/
require_once('./libs/router.php');
$router= new router();
$router->route();


 /*$dao= new ChambreDAO();
 echo "Liste des chambre";
 $dao->Select();
 echo "<br/>Rechereche chambre 1";
 $dao->Search("numChambre","1");
 echo "<br/>Supprimer chambre 2";
  $dao->Delete("2");

echo "<br/>Modifier chambre 3";
$dao->Modify("3","C3","Individuel");
*/ 
