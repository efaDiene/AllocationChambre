
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Alloc'Chambre
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./public/assets/css/material-dashboard.min.css?v=2.1.2" rel="stylesheet" />
    
</head>

<body class="">

  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="./public/assets/img/sidebar-1.jpg">
   
      <div class="logo"><a href="" class="simple-text logo-normal">
          Alloc'Chambre
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="nav-item  ">
            <a class="nav-link" href="<?=urlBase?>etudiantController/listerEtudiant">
              <i class="material-icons">dashboard</i>
              <p>La liste des étudiants</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?=urlBase?>etudiantController/ajouterEtudiant">
              <i class="material-icons">person</i>
              <p>Ajouter un étudiant</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?=urlBase?>chambreController/listerChambre">
              <i class="material-icons">dashboard</i>
              <p>La liste des chambres</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=urlBase?>chambreController/ajouterChambre">
              <i class="material-icons">location_ons</i>
              <p>Ajouter une chambre</p>
            </a>
          </li>
          
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ajouter un étudiant</h4>
                </div>
                <div class="card-body">
                <form method="POST" id="form-quest" action="<?=urlBase?>etudiantController/ajoutE">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Prénom</h4></label>
                          <input type="text" name="prenom" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Nom</h4></label>
                          <input type="text" name="nom" class="form-control" required>
                        </div>
                      </div>
                    </div><div class="row">                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Téléphone</h4></label>
                          <input type="tel" name="tel" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Email</h4></label>
                          <input type="email" name="email" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Date de naissance</h4></label>
                          <input type="date" name="dateNaissance" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">                      
                        <label class="form-check-label"><h4>Type de bourse :</h4>                       
                        </label>
                      
                        <select class="form-control" name="typeBourse" id="select" required>
                          <option value="" selected disabled>Selectionner</option>
                          <option value="Bourse-entiere">Bourse entiere</option>
                          <option value="Demi-Bourse">Demi-Bourse</option>
                          <option value="">Non Boursier</option>
                        </select>
                        
                      </div>
                    </div>
                    
                    <div class="row" id="divParent">
                               
                    </div>                    
                    
                    <button type="reset" class="btn btn-segondary pull-left">Annuler</button>

                    <button type="submit" name="valider" class="btn btn-primary pull-right">Valider</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
      
    </div>
  </div>

<script>

//declaration et creation de div
function mychoice(){
var select = document.getElementById("select");
var divParent = document.getElementById("divParent");

    var div = document.createElement("div");
    div.className="col-md-6 form-group";
    var label = document.createElement("label");
    label.className="form-check-label";
    var h4= document.createElement("h4");
    h4.innerHTML="Logement universitaire :";    
    var selectLoge = document.createElement("select");
    selectLoge.className="form-control";
    selectLoge.name="logement";
    selectLoge.id="select2";
    
    var optionLoge1 = document.createElement("option");
    optionLoge1.value="";
    optionLoge1.innerHTML="Selectionner";
    optionLoge1.setAttribute="disabled";
    optionLoge1.setAttribute="selected";
    var optionLoge2 = document.createElement("option");
    optionLoge2.value="loge";
    optionLoge2.innerHTML="Logé";
    
    var optionLoge3 = document.createElement("option");
    optionLoge3.value="non-loge";
    optionLoge3.innerHTML="Non Logé";
    var div2 = document.createElement("div");
    div2.className="col-md-6 form-group";
    var label = document.createElement("label");
    label.className="form-check-label";
    var h4Ch= document.createElement("h4");
    h4Ch.innerHTML="Numéro chambre";
    var inputCh= document.createElement("input");
    inputCh.type="text";
    inputCh.name="numChambre"
    inputCh.className="form-control"
    var h4Ad= document.createElement("h4");
    h4Ad.innerHTML="Adresse";
    var inputAd= document.createElement("input");
    inputAd.type="text";
    inputAd.name="adresse"
    inputAd.className="form-control"
    var choix = myfunction();
    
    if((choix=="Bourse-entiere") || (choix=="Demi-Bourse")){       
     
        divParent.appendChild(div);
        div.appendChild(label);
        div.appendChild(h4);
        div.appendChild(selectLoge);
        selectLoge.appendChild(optionLoge1);
        selectLoge.appendChild(optionLoge2);
        selectLoge.appendChild(optionLoge3); 
        divParent.appendChild(div2);
        selectLoge.addEventListener('change',function(){
          
          div2.innerHTML=""; 
          mychoice2();
        
        });
        
    }else{
      divParent.appendChild(div2);
      div2.appendChild(label);
      div2.appendChild(h4Ad);
      div2.appendChild(inputAd);
    }
    function mychoice2(){
      var choix2 = myfunction2(); 
      if(choix2=="loge"){  
          div2.appendChild(label);
          div2.appendChild(h4Ch);
          div2.appendChild(inputCh);       
      }
      
      else if(choix2=="non-loge"){
          div2.appendChild(label);
          div2.appendChild(h4Ad);
          div2.appendChild(inputAd);
          
      }
    }
}


//fonction pour connaitre le type de reponse choisi    
function myfunction(){
    var select = document.getElementById("select");
    var choix = select.options[select.selectedIndex].value;

    return choix;

}
function myfunction2(){
    var select = document.getElementById("select2");
    var choix = select.options[select.selectedIndex].value;

    return choix;

}

//ecouteur de changement du select
select.addEventListener('change',function(){
    divParent.innerHTML="";    
    mychoice();
});



</script>

</body>

</html>