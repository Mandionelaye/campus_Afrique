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
						</tr>
						<tr>
							<td>Prénom</td>
							<td><strong><?php echo $date_one_element['prenom']; ?></strong></td>
						</tr>
						<tr>
							<td>Nom</td>
							<td><strong><?php echo $date_one_element['nom']; ?></strong></td>
						</tr>
						<tr>
							<td>Sexe</td>
							<td><strong><?php echo $date_one_element['sexe']; ?></strong></td>
						</tr>
						<tr>
							<td>Téléphone</td>
							<td><strong><?php echo $date_one_element['telephone']; ?></strong></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><strong><?php echo $date_one_element['email']; ?></strong></td>
						</tr>
						<tr>
							<td>Date de naissance</td>
							<td><strong><?php echo $date_one_element['date_naiss']; ?></strong></td>
						</tr>
						<tr>
							<td>Lieu de naissance</td>
							<td><strong><?php echo $date_one_element['lieu_naiss']; ?></strong></td>
						</tr>
						<tr>
							<td>Date de création</td>
							<td><strong><?php echo $date_one_element['date_creation']; ?></strong></td>
						</tr>
						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($date_one_element['etat']); ?></strong></td>
						</tr>
						<!--tr>
							<td>Saisie par</td>
							<td><strong><?php echo $date_one_element['_id_op_saisie']; ?></strong></td>
						</tr-->
						<tr>
							<td>Date dernière modification</td>
							<td><strong><?php echo $date_one_element['date_last_modif']; ?></strong></td>
						</tr>
						<tr>
							<td>Supprimé?</td>
							<td><a href=<?php   echo site_url('supprimer-candidat/'.$code_elt) ?> ><button type="button" class="btn btn-danger">Cliquer ici pour supprimer</button></a></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<!--end du row -->


	</div>
</div>
</main>