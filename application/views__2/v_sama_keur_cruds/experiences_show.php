<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Libelle</td>
							<td><strong><?php echo $date_one_element['libelle']; ?></strong></td>
						</tr>
						<tr>
							<td>Date début</td>
							<td><strong><?php echo $date_one_element['date_debut']; ?></strong></td>
						</tr>
						<tr>
							<td>Date fin</td>
							<td><strong><?php echo $date_one_element['date_fin']; ?></strong></td>
						</tr>
						<tr>
							<td>Entreprise</td>
							<td><strong><?php echo $date_one_element['entreprise_lieu']; ?></strong></td>
						</tr>
						<tr>
							<td>Date Creation</td>
							<td><strong><?php echo $date_one_element['date_creation']; ?></strong></td>
						</tr>
						
						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($date_one_element['etat']); ?></strong></td>
						</tr>
						
		<?php
		
		?>
		<tr>
			<td>Supprimer</td>
			<td><a href=<?php   echo site_url('params-supprimer-experience/'.$code_elt) ?> ><button type="button" class="btn btn-danger">Cliquer ici pour supprimer</button></a></td>
		</tr>
        <tr>
			<td>Modifier</td>
			<td><a href=<?php   echo site_url('params-modifier-experience/'.$code_elt) ?> ><button type="button" class="btn btn-success">Cliquer ici pour modifier</button></a></td>
		</tr>
		<?php
			
		?>

					</tbody>
				</table>
			</div>

		</div>
		<!--end du row -->


	</div>
</div>
</main>