<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>LIBELLE</td>
							<td><strong><?php echo $date_one_element['libelle']; ?></strong></td>
						</tr>
						<tr>
							<td> COMMENTAIRES</td>
							<td><strong><?php echo $date_one_element['commentaires']; ?></strong></td>
						</tr>
						<tr>
							<td>ETAT</td>
							<td><strong><?php echo $date_one_element['etat']; ?></strong></td>
						</tr>
		<?php
		//our voir s'il est autorisé a supprimer
			if (!empty($rdc2_rights['delete'])) 
			{
		?>
		<tr>
			<td>Supprimé?</td>
			<td><a href=<?php   echo site_url('params-supprimer-pieces/'.$code_elt) ?> ><button type="button" class="btn btn-danger">Cliquer ici pour supprimer</button></a></td>
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