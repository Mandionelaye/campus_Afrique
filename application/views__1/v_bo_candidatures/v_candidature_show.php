<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Code candidat</td>
							<td><strong><?php echo $date_one_element['code_candidat']; ?></strong></td>
							<td></td>
						</tr>
						<tr>
							<td>Code Depot</td>
							<td><strong><?php echo $date_one_element['code_depot']; ?></strong></td>
							<td></td>
						</tr>
						
						<tr>
							<td>Offre</td>
							<td><strong><?php echo $date_one_element['_offre']; ?></strong></td>
							<td></td>
						</tr>
						<tr>
							<td>Montant Inscription</td>
							<td><strong><?php echo $date_one_element['montant_inscr']; ?></strong></td>
							<td></td>
						</tr>
						<tr>
							<td>Montant justificatif</td>
							<td><strong><?php echo $date_one_element['montant_justif']; ?></strong></td>
							<td></td>
						</tr>
						<tr>
							<td>Mode paiement</td>
							<td><strong><?php echo $date_one_element['mode_paie']; ?></strong></td>
							<td></td>
						</tr>
						<tr>
							<td>Date Creation</td>
							<td><strong><?php echo $date_one_element['date_creation']; ?></strong></td>
							<td></td>
						</tr>
						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($date_one_element['etat']); ?></strong></td>
							<td></td>
						</tr>
						<tr>
							<td>Saisie par</td>
							<td><strong><?php echo $date_one_element['prenom']; ?> <?php echo $date_one_element['nom']; ?></strong></td>
						<td></td>
						</tr>
		<?php
		//our voir s'il est autorisé a supprimer
			if (!empty($rdc2_rights['delete'])) 
			{
		?>
		<tr>
			<td><a href=<?php   echo site_url('voir-profil-du-candidat/'.$code_elt) ?> ><button type="button" class="btn btn-primary">Voir son profil</button></a></td>
			<td><a href=<?php   echo site_url('supprimer-candidature/'.$code_elt) ?> ><button type="button" class="btn btn-danger">Rejeter la candidature</button></a></td>
			<td><a href=<?php   echo site_url('supprimer-candidature/'.$code_elt) ?> ><button type="button" class="btn btn-success">Présélectionner</button></a></td>

		</tr>
		<?php
			}
		?>

					</tbody>
				</table>
			</div>

		</div>
		<!--end du row -->


	</div>
</div>
</main>