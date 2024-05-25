<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Libellé de l'offre</td>
							<td><strong><?php 
							//demba_debug( $dt_one_element);
							echo $dt_one_element['_offre']; ?></strong></td>
						</tr>
						<tr>
							<td>Code candidat</td>
							<td><strong><?php echo $dt_one_element['code_candidat']; ?></strong></td>
						</tr>
						<tr>
							<td>Date dépot</td>
							<td><strong><?php echo $dt_one_element['date_creation']; ?></strong></td>
						</tr>
						<tr>
							<td>Montant payé</td>
							<td><strong><?php echo $dt_one_element['montant_inscr']; ?></strong></td>
						</tr>
						<tr>
							<td>Etat de la candidature</td>
							<td><strong><?php echo $dt_one_element['etat']; ?></strong></td>
						</tr>
						<!--tr>
							<td>Saisie par:</td>
							<td><strong><?php echo $dt_one_element['id_op_saisie']; ?></strong></td>
						</tr>
						
						<tr>
							<td>Date dernière modification</td>
							<td><strong><?php echo $dt_one_element['date_last_modif']; ?></strong></td>
						</tr-->
					</tbody>
				</table>
			</div>

		</div>
		<!--end du row -->


	</div>
</div>