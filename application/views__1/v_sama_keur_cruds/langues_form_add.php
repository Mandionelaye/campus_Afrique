<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('ajouter-une-langue')  ?>">

				

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Langues</label>
						</div>
						<div class="col-sm-8">
							<?php
							$val_var = !empty($this->input->post('id_langue')) ? $this->input->post('id_langue') : '';
							echo form_dropdown('id_langue', $dat_list_langue, $val_var, " class='form-select'");

							?>
							<?php echo form_error('id_langue', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Commentaires</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('commentaires')) ? set_value('commentaires') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="commentaires">
							<?php echo form_error('commentaires', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Niveau</label>
						</div>
						<div class="col-sm-8">
							<?php
							$options = array(
								''	=> 'Choisir...',
								'debutant'	=> 'debutant',
								'moyen'	=> 'Moyen',
								'Avancee'	=> 'Avance',
							);

							$val_var = !empty($this->input->post('niveau')) ? $this->input->post('niveau') : '';
							echo form_dropdown('niveau', $options, $val_var, " class='form-select'");

							?>
							<?php echo form_error('niveau', '<div class="error">', '</div>'); ?>
						</div>
					</div>


 

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Lu</label>
						</div>
						<div class="col-sm-8">
							<?php
							$options = array(
								''	=> 'Choisir...',
								'1'	=> 'oui',
								'0'	=> 'non',
							);

							$val_var = !empty($this->input->post('lu')) ? $this->input->post('lu') : '';
							echo form_dropdown('lu', $options, $val_var, " class='form-select'");

							?>
							<?php echo form_error('lu', '<div class="error">', '</div>'); ?>
						</div>
					</div>




					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Parle</label>
						</div>
						<div class="col-sm-8">
							<?php
							$options = array(
								''	=> 'Choisir...',
								'1'	=> 'oui',
								'0'	=> 'non',
							);

							$val_var = !empty($this->input->post('parle')) ? $this->input->post('parle') : '';
							echo form_dropdown('parle', $options, $val_var, " class='form-select'");

							?>
							<?php echo form_error('parle', '<div class="error">', '</div>'); ?>
						</div>
					</div>



					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Ecrit</label>
						</div>
						<div class="col-sm-8">
							<?php
							$options = array(
								''	=> 'Choisir...',
								'1'	=> 'oui',
								'0'	=> 'non',
							);

							$val_var = !empty($this->input->post('ecrit')) ? $this->input->post('ecrit') : '';
							echo form_dropdown('ecrit', $options, $val_var, " class='form-select'");

							?>
							<?php echo form_error('ecrit', '<div class="error">', '</div>'); ?>
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