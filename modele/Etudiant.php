<?php
class Etudiant implements IProjet{
    protected $matricule;
    protected $prenom;
    protected $nom; 
    protected $dateNaissance;
    protected $tel;
    protected $email;
    
    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->matricule=$row['matricule'];
        $this->prenom=$row['prenom'];
        $this->nom=$row['nom'];
        $this->dateNaissance=$row['dateNaissance'];
        $this->tel=$row['tel'];
        $this->email=$row['email'];
    }

    public function getMatricule(){
        return $this->matricule;
    }
    public function getPrenom(){
            return $this->prenom;
    }

    public function getNom(){
            return $this->nom;
    }

    public function getDateNaissance(){
            return $this->dateNaissance;
    }

    public function getTel(){
            return $this->tel;
    }

    public function getEmail(){
            return $this->email;
    }  

    public function setMatricule($matricule){
        $this->matricule=$matricule;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }

    public function setDateNaissance($dateNaisssance){
        $this->dateNaissance=$dateNaisssance;
    }

    public function setTel($tel){
        $this->tel=$tel;
    }

    public function setEmail($email){
        $this->email=$email;
    }  
}