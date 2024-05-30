
<?php

	//demba_debug($this->session->donnees_du_postulant['dt_diploms']['0']['libelle']);
?>



<div class="card" align='center'>
	<div class="card-body">
	  <h5 class="card-title">
			Confirmez vous le dépot de votre candidature à l'offre pédagogie?<br />
			Cette action sera irreversible!!!
		</h5>

	  <!-- Growing Color spinnersr -->

&nbsp; &nbsp; &nbsp; &nbsp; 

	  <div class="spinner-grow text-info" role="status">
		<span class="visually-hidden">Loading...</span>
	  </div>

&nbsp; &nbsp; &nbsp; &nbsp; 



			<p>&nbsp; </p>


			<div class="alert alert-info alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Demande de confirmation???</h4>
                <p>Voulez vous confirmer le dépot de votre candidature</p>
                <hr>
                <!--p class="mb-0">Vous pouvez maintenant vous connecter.</p-->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
			  
			<div >
			<a href="<?php echo site_url('valider-ma-candidature/'.$code_concours) ?>" ; >
				<button type="button" class="btn btn-success">Confirmer le dépot de ma candidature </button>
			</a>
			
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

			<a href='<?php echo site_url('candidat-liste-des-offres') ?>'>
				<button type="button" class="btn btn-danger">Retourner à la liste des offres </button>
			</a>
			</div>

	</div>
  </div>

</main>