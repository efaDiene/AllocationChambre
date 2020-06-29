
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="<?=BASE_URL?>/public/css/listeretudiant.css" rel="stylesheet">



        <div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title bg-primary">
        <div class="row">
          <div class="col-sm-6">
            <h2>Enregistrer <b>Chambre</b></h2>
          </div>
          <div class="col-sm-6">
                  <select type="text" class="form-control" name="first_name" placeholder="Profile" required="required">
                  <option value="">Type Chambre</option>
                  <option value="">Collectif</option>
                  <option value="">Individuel</option>
                </select>
          </div>
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
              <span class="custom-checkbox">
                <input type="checkbox" id="selectAll">
                <label for="selectAll"></label>
              </span>
            </th>
            <th>Numero Chambre</th>
            <th>Numero Batiment</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

        <?php 
            foreach(@$chambre as $clef=>$valeur){
        ?>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="<?=$valeur->getIdChambre()?>">
                <label for="checkbox1"></label>
              </span>
            </td>
            <td><?= $valeur->getNumChambre() ?></td>
            <td><?= $valeur->getNumBatiment() ?></td>
            <td><?= $valeur->getTypeChambre() ?></td>
            <td>
            
              <a href="#editEmployeeModal" id_chambre="<?=$valeur->getIdChambre()?>" num_chambre="<?=$valeur->getNumChambre()?>" num_batimen="<?=$valeur->getNumChambre()?>" type_chambr="<?=$valeur->getTypeChambre()?>" class="edit modifi" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

              <a href="#deleteEmployeeModal" id_chambre="<?=$valeur->getIdChambre()?>" num_chambre="<?=$valeur->getNumChambre()?>" num_batimen="<?=$valeur->getNumChambre()?>" type_chambr="<?=$valeur->getTypeChambre()?>" class="delete _delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>

            <?php }  ?>

            <?php 
          
          ?>


           
        </tbody>
      </table>
      <div class="clearfix">
        <div class="hint-text"> <b></b>  <b></b> </div>
        <ul class="pagination">
          <li class="page-item disabled"><a href="#">Previous</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item active"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
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
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
        <div class="form-group">
						<label>Id Chambre</label>
						<input type="text" class="form-control" id="id_chambre" placeholder="" value="" readonly required>
					</div>
          <div class="form-group">
						<label>Numero Chambre</label>
						<input type="text" class="form-control" id="num_chambre" placeholder="" value="" readonly required>
					</div>
					<div class="form-group">
						<label>Numero Batiment</label>
						<input type="text" class="form-control" id="num_batiment" required>
					</div>
					
					<div class="form-group">
						<label>Type Chambre</label>
						<input type="text" class="form-control" id="type_chambre" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info btn_save" value="Save">
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
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger confirm_delete" value="Delete">
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
   $id_chambre= $(this).attr("id_chambre")
  $("#id_chambre").val($id_chambre);
  $num_chambre=$(this).attr("num_chambre");
  $("#num_chambre").val($num_chambre);
  

  $('.btn_save').on('click',function(){
    $num_batiment=$("#num_batiment").val();
    $type_chambre=$("#type_chambre").val();

    $.ajax({

               type: "POST",
              url: "<?=BASE_URL?>/security/vmodifierchambre",
              //data: $('form').serialize(),
              data: {id_chambre:$id_chambre,num_chambre:$num_chambre,num_batiment:$num_batiment,type_chambre:$type_chambre},
              dataType: "text",
              success: function (data) {
                  //alert(data);
                }


    })
    
  })

  
})



$('._delete').on("click",function(){
   $id_chambre= $(this).attr("id_chambre")
   //alert($id_chambre);

   $('.confirm_delete').on('click',function(){
    $.ajax({

               type: "POST",
              url: "<?=BASE_URL?>/security/vsupprimerchambre",
              //data: $('form').serialize(),
              data: {id_chambre:$id_chambre},
              dataType: "text",
              success: function (data) {
                 // alert(data);
                }

    })
  
})

})
 
});

</script>
