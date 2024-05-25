Confirmer vous la suppression du fichier lié

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Libellé</td>
							<td><strong><?php echo $dat_one_row['libelle']; ?></strong></td>
						</tr>
						<tr>
							<td>Commentaires</td>
							<td><strong><?php echo $dat_one_row['annee_obtention']; ?></strong></td>
						</tr>
						
						<tr>
							<td>Date Creation</td>
							<td><strong><?php echo $dat_one_row['date_creation']; ?></strong></td>
						</tr>
						
						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($dat_one_row['etat']); ?></strong></td>
						</tr>
						
						<tr>
							<td>Image</td>
							<td><img src="<?php echo base_url('j0kimpl8ldq/diplomes/'.$dat_one_row['image']); ?>" /></td>
						</tr>
						
		<?php
		
		?>
		<tr>
			<td>Supprimer</td>
			<td><a href=<?php   echo site_url('supprimer-image-diplome-ok/'.$dat_one_row['id']) ?> ><button type="button" class="btn btn-danger">Cliquer ici pour supprimer</button></a></td>
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