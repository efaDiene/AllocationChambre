<?php
class ControllerSecurity{
    protected $ctrl;

    public function index(){

    }
    
    

    public function connexion(){


    }



    //Use Case
   public function ajouterCh(){

      if(isset($_POST['valider'])){
         extract($_POST);
         $this->dao=new ChambreDao();
         $this->dao->Add([
             6,
             $chambre,
             $numBatiment
         ]);
         require_once('./vues/vueListeChambre.php');
         //Validation
         /*$this->validator->isVide($login,"login","Le Login est vide");
         $this->validator->isVide($password,"password","Le Mot de Passe est vide");
         if($this->validator->isValid()){
            $user=$this->dao->findByLoginAndPwd($login,$password);
             if($user!=null){
                //Ajouter dans la session
               if($user->getProfil()==="admin"){
                  $this->data_view["title"]="Pour proposer des quizz";
                  $this->layout="admin";
                  $this->view="inscription";
                  $this->render();    
               }else{
                  echo "Vue Joueur";
               }
             }else{
                //User Not Existe
                $this->data_view["error"]="Login Mot de Passe Incorrect";
                $this->index();
             }
           
         }else{
            $this->data_view["error"]= $this->validator->getErrors();
            $this->index();
         }*/
         
      }else{
         echo "erreur";
      }
      
   }

   public function deconnexion(){
       
   }

   public function inscription(){
       
   }



}