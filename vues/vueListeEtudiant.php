
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
        <li class="nav-item  active">
            <a class="nav-link" href="<?=urlBase?>etudiantController/listerEtudiant">
              <i class="material-icons ">dashboard</i>
              <p>La liste des étudiants</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=urlBase?>etudiantController/ajouterEtudiant">
              <i class="material-icons">person</i>
              <p>Ajouter un étudiant</p>
            </a>
          </li>

          <li class="nav-item">
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
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          
          
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" id="recherche" value="" class="form-control" placeholder="Rechercher...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Liste des etudiants</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive" >
                    <table class="table">
                      <thead class=" text-primary">
                      
                        <th>Matricule</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Date de Naissance</th>    
                            <th>Email</th> 
                            <th>Téléphone</th>    
                                               
                      </thead>
                     
                      <tbody id="chercher">

                      <?php
                      foreach(@$etudiant as $value){?>
                      <tr>
                      <td><?php echo $value->getMatricule(); ?></td>
                      <td><?php echo $value->getPrenom(); ?></td>
                      <td><?php echo $value->getNom(); ?></td>
                      <td><?php echo $value->getDateNaissance(); ?></td>
                      <td><?php echo $value->getEmail(); ?></td>
                      <td><?php echo $value->getTel(); ?></td>                      
                      <td>
                      <div class="btn-group">
                          <a href="#editEmployeeModal" matricule="<?=$value->getMatricule()?>" nom="<?=$value->getPrenom() ?>" prenom="<?=$value->getNom();?>" dateNaissance="<?=$value->getDateNaissance()?>" email="<?=$value->getEmail() ?>" tel="<?=$value->getTel() ?>" class="edit modifi" data-toggle="modal"><button type="button" class="btn btn-primary mr-3">
                          <i class="fa fa-edit"></i> Modifier </button></a>    

                          <a href="#deleteEmployeeModal" matricule="<?=$value->getMatricule()?>" class="delete _delete" data-toggle="modal"><button type="button" class="btn btn-danger">
                          <i class="fa fa-trash"></i> Supprimer </button>
                          </a>
                          </div>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>         
                                            
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Etudiant</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Prénom</h4></label>
                          <input type="text" id="prenom" name="prenom" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Nom</h4></label>
                          <input type="text" id="nom" name="nom" class="form-control" required>
                        </div>
                      </div>
                    </div><div class="row">                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Téléphone</h4></label>
                          <input type="tel" id="tel" name="tel" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Email</h4></label>
                          <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"><h4>Date de naissance</h4></label>
                          <input type="date" id="dateNaissance" name="dateNaissance" class="form-control" required>
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
                  </div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="submit" class="btn btn-primary btn_save" value="Enregistrer">
				</div>
			</form>
		</div>
	</div>
</div>
  
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Etudiant</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Voulez vous vraiment supprimer cet etudiant ?</p>
					<p class="text-warning"><small>Cette action est irréversible !!!</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="submit" class="btn btn-danger confirm_delete" value="Supprimer">
				</div>
			</form>
		</div>
	</div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){

$('.modifi').on("click",function(){
  $matricule= $(this).attr("matricule")
  $prenom=$(this).attr("prenom");
  $("#prenom").val($prenom);  
  $nom=$(this).attr("nom");
  $("#nom").val($nom);
  $dateNaissance= $(this).attr("dateNaissance")
  $("#dateNaissance").val($dateNaissance);
  $email= $(this).attr("email")
  $("#email").val($email);
  $tel=$(this).attr("tel");
  $("#tel").val($tel);
  /*$dateNaissance= $(this).attr("dateNaissance")
  $("#dateNaissance").val($dateNaissance);
*/

  $('.btn_save').on('click',function(){
    $prenom=$("#prenom").val();
    $nom=$("#nom").val();
    $dateNaissance=$("#dateNaissance").val();
    $email=$("#email").val();
    $tel=$("#tel").val();
    $typeBourse=$("#select").val();
    $logement=$("#select2").val();
    $adresse=$("#adresse").val();
    $chambre=$("#chambre").val();

    $.ajax({

              type: "POST",
              url: "<?=urlBase?>etudiantController/modifierEtudiant",
              //data: $('form').serialize(),
              data: {matricule:$matricule,prenom:$prenom,nom:$nom,dateNaissance:$dateNaissance,tel:$tel,email:$email,typeBourse:$typeBourse,logement:$logement,adresse:$adresse,chambre:$chambre},
              dataType: "text",
              success: function (data) {
                  //alert(data);
                }


    })
    
  })

  
})



$('._delete').on("click",function(){
   $matricule= $(this).attr("matricule")
   //alert($idChambre);

   $('.confirm_delete').on('click',function(){
    $.ajax({

               type: "POST",
              url: "<?=urlBase?>etudiantController/supprimerEtudiant",
              //data: $('form').serialize(),
              data: {matricule:$matricule},
              dataType: "text",
              success: function (data) {
                 // alert(data);
                }

    })
  
})

})
 
});


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
    inputCh.id="chambre"
    inputCh.className="form-control"
    var h4Ad= document.createElement("h4");
    h4Ad.innerHTML="Adresse";
    var inputAd= document.createElement("input");
    inputAd.type="text";
    inputAd.name="adresse"
    inputAd.id="adresse"
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
<script src="./public/js/jquery.js"></script>
<script>
$(document).ready(function(){
  $("#recherche").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#chercher tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 
  
</body>

</html>