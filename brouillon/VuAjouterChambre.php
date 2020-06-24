<!doctype html>
<html lang="en">
    <head>
        <title>Alloc Chambre</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- CSS DU PROJET -->
		<link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="../public/css/alloc.css">

    </head>
    <body class="left-sidebar">
	<!-- Header --> 
		<div  id = "container" class="container-fluid">
			<header class="row p-0">
				<div class="col-2">
					<svg class="bi bi-arrow-left" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
					</svg>				
				</div>
				<div id ="title" class=" col-8  d-flex align-items-center">
					<h1 position-fixed style="font-family: 'Faster One', cursive;" >ALLOC'CHAMBRE</h1>
				</div>
		
		    </header>
		</div>
		<div class="row">
			<div class="etudiantclass">
				<h6 class="titrelistes">LISTES DES ETUDIANTS</h6>
			</div>
		</div>

		<div id="page-wrapper">
			           
			
			<!-- Main -->
			<article id="main">
			<section class="wrapper style4 container">
				<div class="sidebar">
					<section>
                    <br/>
					<form action="" method="POST" enctype="multipart/form-data">
						
						
						 <div class="form-group">
						 <div class="row">
						 <div class="col"> <label>Type de la chambre:</label></div>
						   <div class="col">
							 	<input type="radio" id="ind" name="bourse" value="Individuel" required="required">
								 <label for="ind">Individuel</label><br/>
							 	<input type="radio" id="deux" name="bourse" value="Partagé" required="required">
								 <label for="deux">Partagé</label><br>
							 <br/>
						 </div></div></div>


						 <div class="form-group">
							<label>Numéro du Batiment  de la chambre:</label>
							<input type="text" class="form-control" name="pass" placeholder="Mot de passe" required="required"><br/>
						 </div>

						 <button type="submit" name="enregristrer" class="btn btn-primary">Valider</button>
					</form>
				  </div>	
			</div>
    
            
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>