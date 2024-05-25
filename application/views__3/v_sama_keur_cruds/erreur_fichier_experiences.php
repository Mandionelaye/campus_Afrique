


<div class="card" align='center'>
	<div class="card-body">
	  <h5 class="card-title">Type de fichier non autorisé</h5>

	  <!-- Growing Color spinnersr -->

	  <div class="spinner-grow text-danger" role="status">
		<span class="visually-hidden">Loading...</span>
	  </div>

			<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Message d'information</h4>
                <p>Le type de fichier fournit n'est pas accepté , les extensions acceptées sont : 
                   <b> <?php $elements_concatenes = implode(', ', $valides);
echo $elements_concatenes; ?></b></p>
                <hr>
                <!--p class="mb-0">Veuillez mettre à jour toutes vos données.</p-->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
			  
			<div >
			<a href="<?php echo site_url('liste-des-experiences') ?>" ; >
				<button type="button" class="btn btn-success">Voir mes expériences</button>
			</a>
			<!--a href="<?php // echo site_url('mon-espace') ?>" ; >
				<button type="button" class="btn btn-success">Accueil </button>
			</a>
			
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			<a href='./'>
				<button type="button" class="btn btn-info">Retourner à l'accueil </button>
			</a-->
			</div>

	</div>
  </div>

  </main>