<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('ajouter-des-candidatures')  ?>">
					<?php //a dynamiser
						//$val_var = !empty(set_value('code_elt')) ? set_value('code_elt') : $code_elt;
					?>


					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Offre</label>
						</div>
						<div class="col-sm-8">
						<?php
							
							$val_var = !empty($this->input->post('id_offre')) ? $this->input->post('id_offre') : '';
							echo form_dropdown('id_offre', $dt_categ, $val_var, " class='form-select'");
							
							 ?>
							<?php echo form_error('offre', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Code Depot</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('code_depot')) ? set_value('code_depot') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="code_depot">
							<?php echo form_error('depot', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Montant Inscription</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('montant_inscr')) ? set_value('montant_inscr') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="montant_inscr">
							<?php echo form_error('montant_inscr', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
						 	<label class="text-center">Montant justification</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('montant_justif')) ? set_value('montant_justif') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="montant_justif">
							<?php echo form_error('offre', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Mode de paiement</label>
						</div>
						<div class="col-sm-8">
							<?php
							$options = array(
								''	=> 'Choisir...',
								'Espece'	=> 'Espece',
								'cheque'	=> 'cheque',
							);

							$val_var = !empty($this->input->post('mode_paie')) ? $this->input->post('mode_paie') : '';
							echo form_dropdown('mode_paie', $options, $val_var, " class='form-select'");

							?>
							<?php echo form_error('mode_paie', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Statut</label>
						</div>
						<div class="col-sm-8">
							<?php
							$options = array(
								''	=> 'Choisir...',
								'1'	=> 'Actif',
								'0'	=> 'Inactif',
							);

							$val_var = !empty($this->input->post('etat')) ? $this->input->post('etat') : '';
							echo form_dropdown('etat', $options, $val_var, " class='form-select'");

							?>
							<?php echo form_error('etat', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<hr>
					<div class="row mb-3">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-4">
							<button type="submit" class="btn btn-success">Enregistrer</button>
						</div>
						<div class="col-sm-4">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>




	</div>
</div>