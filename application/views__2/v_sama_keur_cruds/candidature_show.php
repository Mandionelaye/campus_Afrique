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
							<td>Mode de paiement</td>
							<td><strong><?php echo $dt_one_element['mode_paie']; ?></strong></td>
						</tr>
						<tr>
							<td>Note dépot</td>
							<td><strong><?php echo $dt_one_element['note_depot']; ?></strong></td>
						</tr>
						<tr>
							<td>Note finale</td>
							<td><strong><?php echo $dt_one_element['note_finale']; ?></strong></td>
						</tr>
						<tr>
							<td>Niveau d'étude</td>
							<td><strong><?php echo $dt_one_element['cand_niveau_etude']; ?></strong></td>
						</tr>
						<tr>
							<td>Etat de la candidature</td>
							<td>
							<?php
								if ($dt_one_element['etat'] == 'depot_en_cours') {

									echo "<span class='badge' style='background-color:blue'> &nbsp &nbsp  Depot en cours &nbsp &nbsp </span>";
								} else if ($dt_one_element['etat'] == 'commission_en_cours') {
									echo "<span class='badge bg-primary'> &nbsp  Commission en cours &nbsp </span>";}
									else if ($dt_one_element['etat'] == 'retenu') {
										echo "<span class='badge bg-success'> &nbsp  Retenu &nbsp </span>";}
										else if ($dt_one_element['etat'] == 'liste_attente') {
											echo "<span class='badge bg-primary'> &nbsp  En liste attente &nbsp </span>";}
											else if ($dt_one_element['etat'] == 'elimine') {
												echo "<span class='badge bg-danger'> &nbsp  Eliminé &nbsp </span>";}
												else {
													echo "<span class='badge' style='background-color:orange'> &nbsp  Cloturé &nbsp </span>";}
																		
								?>
								</td>
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


</main>