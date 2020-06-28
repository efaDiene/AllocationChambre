
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
                <input type="text" value="" class="form-control" placeholder="Search...">
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
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      
                        <th>Matricule</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Date de Naissance</th>    
                            <th>Email</th> 
                            <th>Téléphone</th>    
                                               
                      </thead>
                     
                      <tbody>

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
                          <a href="<?=urlBase?>etudiantController/modifierEtudiant"><button type="button" class="btn btn-primary mr-3">
                          <i class="fa fa-edit"></i> Modifier </button></a>    

                          <a href="<?=urlBase?>etudiantController/supprimerEtudiant"><button type="button" class="btn btn-danger">
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

  
</body>

</html>