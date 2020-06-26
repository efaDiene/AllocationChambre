<?php
class Router{


    public function route(){
        
        try {
            spl_autoload_register(function($class){
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
                
                if(isset($_GET['url'])){
                    $url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL));
                    
                    $control=$url[0];
                    
                    $controller="./controller/".$control.".php";
                    if (file_exists($controller)) {
                        require_once($controller);
                        $this->ctrl= new $control();
                        $method=$url[1];
                        if (method_exists($this->ctrl,$method)) {
                            $this->ctrl->{$method}();
                        }else {
                            $erreur->afficherErreur("Cette methode n'existe pas!!!");
                        }

                    }
                    else{
                        require_once("./controller/errorController.php");
                        $erreur=new ErrorController();
                        $erreur->afficherErreur("Ce controller n'existe pas!!!");
                    }

                }else {
                    $controller="./controller/etudiantController.php";
                    require_once($controller);
                    $this->ctrl= new EtudiantController();
                    $this->ctrl->listerEtudiant();
                }    

                
            
        } catch (Exception $e) {
            die("erreur de chargement");
        }






       
    }
}