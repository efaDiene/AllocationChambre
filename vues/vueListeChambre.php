
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
          <li class="nav-item ">
            <a class="nav-link" href="<?=urlBase?>etudiantController/ajouterEtudiant">
              <i class="material-icons">person</i>
              <p>Ajouter un étudiant</p>
            </a>
          </li>

          <li class="nav-item active">
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
                  <h4 class="card-title ">Liste des chambre</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Numéro chambre
                        </th>
                        <th>
                          Type de chambre
                        </th>
                        <th>
                          Numéro batiment
                        </th>
                      </thead>
                     
                      <tbody>
                      <?php
                      foreach(@$chambre as $value){?>
                      <tr>
                      <td><?php echo $value->getNumChambre(); ?></td>
                      <td><?php echo $value->getTypeChambre(); ?></td>
                      <td><?php echo $value->getNumBatiment(); ?></td>
                      <td>
                          <div class="btn-group">
                          <a href="#editEmployeeModal" idChambre="<?= $value->getIdChambre()?>" numChambre="<?=$value->getNumChambre()?>" numBatiment="<?=$value->getNumChambre()?>" typeChambr="<?=$value->getTypeChambre()?>" class="edit modifi" data-toggle="modal"><button type="button" class="btn btn-primary mr-3">
                          <i class="fa fa-edit"></i> Modifier </button></a>    

                          <a href="#deleteEmployeeModal" idChambre="<?=$value->getIdChambre()?>" numChambre="<?=$value->getNumChambre()?>" numBatiment="<?=$value->getNumChambre()?>" typeChambr="<?=$value->getTypeChambre()?>" class="delete _delete" data-toggle="modal"><button type="button" class="btn btn-danger">
                          <i data-toggle="tooltip" title="delete" class="fa fa-trash"></i> Supprimer </button>
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
					<h4 class="modal-title">Modifier Chambre</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
        <div class="form-group">
						<label>Id Chambre</label>
						<input type="text" class="form-control" id="idChambre" placeholder="" value="" readonly required>
					</div>
          <div class="form-group">
						<label>Numéro Chambre</label>
						<input type="text" class="form-control" id="numChambre" placeholder="" value="" readonly required>
					</div>
          
          <div class="form-group">
          <label>Type de Chambre</label>
            <select class="form-control" id="typeChambre" required>
              <option value="" selected disabled>Selectionner</option>
              <option value="Partagé">Partagé</option>
              <option value="Individuel">Individuel</option>
            </select>
					</div>
					<div class="form-group">
						<label>Numéro Batiment</label>
						<input type="text" class="form-control" id="numBatiment" required>
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
					<h4 class="modal-title">Supprimer chambre</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Voulez vous vraiment supprimer cette chambre ?</p>
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
   $idChambre= $(this).attr("idChambre")
  $("#idChambre").val($idChambre);
  $numChambre=$(this).attr("numChambre");
  $("#numChambre").val($numChambre);
  

  $('.btn_save').on('click',function(){
    $numBatiment=$("#numBatiment").val();
    $typeChambre=$("#typeChambre").val();

    $.ajax({

               type: "POST",
              url: "<?=urlBase?>chambreController/modifierChambre",
              //data: $('form').serialize(),
              data: {idChambre:$idChambre,numChambre:$numChambre,numBatiment:$numBatiment,typeChambre:$typeChambre},
              dataType: "text",
              success: function (data) {
                  //alert(data);
                }


    })
    
  })

  
})



$('._delete').on("click",function(){
   $idChambre= $(this).attr("idChambre")
   //alert($idChambre);

   $('.confirm_delete').on('click',function(){
    $.ajax({

               type: "POST",
              url: "<?=urlBase?>chambreController/supprimerChambre",
              //data: $('form').serialize(),
              data: {idChambre:$idChambre},
              dataType: "text",
              success: function (data) {
                 // alert(data);
                }

    })
  
})

})
 
});

</script>
</body>

</html>
