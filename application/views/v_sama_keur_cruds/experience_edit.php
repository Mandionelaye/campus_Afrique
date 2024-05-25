<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('params-modifier-experience/'.$code_elt)  ?>">

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Type de diplôme</label>
						</div>
						<div class="col-sm-8">
							<?php
							$val_var = !empty($this->input->post('id_type_exp')) ? $this->input->post('id_type_exp') : '';
							echo form_dropdown('id_type_exp', $dat_list_exp, $val_var, " class='form-select'");

							?>
							<?php echo form_error('id_type_exp', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Nom du diplôme</label>
						</div>
						<div class="col-sm-8">
							
							<input type="text" class="form-control" value="<?php echo $date_one_element['libelle']; ?>" name="libelle">
							<?php echo form_error('libelle', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Date debut</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('date_debut')) ? set_value('date_debut') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $date_one_element['date_debut']; ?>" name="annee_obtention">
							<?php echo form_error('date_debut', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Date Fin</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('date_fin')) ? set_value('date_fin') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $date_one_element['date_fin']; ?>" name="annee_obtention">
							<?php echo form_error('date_fin', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Entreprise</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('entreprise_lieu')) ? set_value('entreprise_lieu') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $date_one_element['entreprise_lieu']; ?>" name="annee_obtention">
							<?php echo form_error('entreprise_lieu', '<div class="error">', '</div>'); ?>
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
						</main>