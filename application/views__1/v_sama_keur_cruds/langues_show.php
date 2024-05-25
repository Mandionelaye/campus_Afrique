<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php //echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Libellé</td>
							<td><strong><?php 
							//demba_debug( $dt_one_element);
							echo $dt_one_element['the_label']; ?></strong></td>
						</tr>
						<tr>
							<td>Niveau</td>
							<td><strong><?php echo $dt_one_element['niveau']; ?></strong></td>
						</tr>
						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($dt_one_element['etat']); ?></strong></td>
						</tr>
						<!--tr>
							<td>Saisie par</td>
							<td><strong><?php echo $dt_one_element['_id_op_saisie']; ?></strong></td>
						</tr-->
						<tr>
							<td>Date création</td>
							<td><strong><?php echo $dt_one_element['date_creation']; ?></strong></td>
						</tr>
						<tr>
							<td>Saisie par:</td>
							<td><strong><?php echo $dt_one_element['id_op_saisie']; ?></strong></td>
						</tr>
						
						<tr>
							<td>Date dernière modification</td>
							<td><strong><?php echo $dt_one_element['date_last_modif']; ?></strong></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<!--end du row -->


	</div>
</div>