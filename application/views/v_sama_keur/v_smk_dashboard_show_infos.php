


<div class="card" align='center'>
	<div class="card-body">
	  <h5 class="card-title">Il faut obligatoirement remplir le minimum d'informations avant de pouvoir déposer</h5>

	  <!-- Growing Color spinnersr -->

	  <div class="spinner-grow text-danger" role="status">
		<span class="visually-hidden">Loading...</span>
	  </div>



			<p>&nbsp; </p>


			<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Message d'information</h4>
                <p>Il est obligatoire de fournir:<b> <?php  echo $the_message;  ?> </b> avant de pouvoir postuler</p>
                <hr>
                <!--p class="mb-0">Veuillez mettre à jour toutes vos données.</p-->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
			  
			<div >
			<a href="<?php echo site_url($p_mess_the_url) ?>" ; >
				<button type="button" class="btn btn-success">Mettre à jour <?php  echo $p_mess;  ?></button>
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