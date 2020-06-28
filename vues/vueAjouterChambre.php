
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
          <li class="nav-item ">
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
          <li class="nav-item active">
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
                  <h4 class="card-title">Ajouter une chambre </h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="<?=urlBase?>chambreController/ajouterCh">
                    
                  <div class="row my-5">
                      <div class="col-md-6">                      
                        <label class="form-check-label">Type de chambre :
                        </label>
                        <select class="form-control" name="chambre" required>
                          <option value="" selected disabled>Selectionner</option>
                          <option value="Partagé">Partagé</option>
                          <option value="Individuel">Individuel</option>
                        </select>
                      </div>
                                            
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Numéro Batiment</label>
                          <input type="text" name="numBatiment" class="form-control" required>
                        </div>
                      </div>                      
                    </div>
                    <button type="reset" name="annuler" class="btn btn-segondary pull-left">Annuler</button>

                    <button type="submit" name="valider" class="btn btn-primary pull-right">Valider</button>                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
      
    </div>
  </div>

</body>

</html>