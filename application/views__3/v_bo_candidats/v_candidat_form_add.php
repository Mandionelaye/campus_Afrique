<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>


	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('ajouter-candidat')  ?>">
					<?php //a dynamiser
						//$val_var = !empty(set_value('code_elt')) ? set_value('code_elt') : $code_elt;
					?>
					<!--input type="hidden" value="<?php //echo $val_var; ?>" name="code_elt"  -->


					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Code candidat</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('code_candidat')) ? set_value('code_candidat') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="code_candidat">
							<?php echo form_error('code_candidat', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Prénom</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('prenom')) ? set_value('prenom') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="prenom">
							<?php echo form_error('prenom', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Nom</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('nom')) ? set_value('nom') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="nom">
							<?php echo form_error('nom', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Sexe</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('sexe')) ? set_value('sexe') : '';
							?>
								<!--input type="radio" class="form-control" value="<?php echo $val_var; ?>" name="sexe"-->
							<?php echo form_radio('sexe', '1', FALSE); ?><?php echo form_label('Masculin', 'sexe');?>
							<?php echo form_radio('sexe', '2', FALSE); ?><?php echo form_label('Feminin', 'sexe');?>
							<?php echo form_error('sexe', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Téléphone</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('telephone')) ? set_value('telephone') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="telephone">
							<?php echo form_error('telephone', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Email</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('email')) ? set_value('email') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="email">
							<?php echo form_error('email', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Date de naissance</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('date_naiss')) ? set_value('date_naiss') : '';
							?>
							<input type="date" class="form-control" value="<?php echo $val_var; ?>" name="date_naiss">
							<?php echo form_error('date_naiss', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Lieu de naissance</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('lieu_naiss')) ? set_value('lieu_naiss') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="lieu_naiss">
							<?php echo form_error('lieu_naiss', '<div class="error">', '</div>'); ?>
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