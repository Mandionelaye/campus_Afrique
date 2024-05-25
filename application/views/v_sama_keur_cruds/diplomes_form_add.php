<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('ajouter-un-diplome')  ?>">

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Type de diplôme</label>
						</div>
						<div class="col-sm-8">
							<?php
							$val_var = !empty($this->input->post('id_type_diplome')) ? $this->input->post('id_type_diplome') : '';
							echo form_dropdown('id_type_diplome', $dat_list_dipl, $val_var, " class='form-select'");

							?>
							<?php echo form_error('id_type_diplome', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Nom du diplôme</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('libelle')) ? set_value('libelle') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="libelle">
							<?php echo form_error('libelle', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Année obtention</label>
						</div>
						<div class="col-sm-8">
						<?php
							$options = array(
								'' => 'Choisir une année...',
							);
							
							// Ajoutez les années de votre choix
							for ($annee = date('Y'); $annee >= (date('Y') - 53); $annee--) {
								$options[$annee] = $annee;
							};

							$val_var = !empty(set_value('annee_obtention')) ? set_value('annee_obtention') : '';
							echo form_dropdown('annee_obtention', $options, $val_var, " class='form-select'");

							?>
							
							<?php echo form_error('annee_obtention', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Centre/Ecole/université</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('lieu_obtention')) ? set_value('lieu_obtention') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="lieu_obtention">
							<?php echo form_error('lieu_obtention', '<div class="error">', '</div>'); ?>
						</div>
					</div>


					<!--div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Statut</label>
						</div>
						<div class="col-sm-8">
							<?php
							/* 
							
							$options = array(
								''	=> 'Choisir...',
								'1'	=> 'Actif',
								'0'	=> 'Inactif',
							);

							$val_var = !empty($this->input->post('etat')) ? $this->input->post('etat') : '';
							echo form_dropdown('etat', $options, $val_var, " class='form-select'");
								*/
							?>
							<?php //echo form_error('etat', '<div class="error">', '</div>'); ?>
						</div>
					</div-->



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
</main>