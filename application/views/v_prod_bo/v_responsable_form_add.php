<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title">Formulaire ajout:Responsable</h5>


	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('add_responsable/'.$code_elt)  ?>">
					<?php //a dynamiser
						//$val_var = !empty(set_value('code_elt')) ? set_value('code_elt') : $code_elt;
					?>
					<!--input type="hidden" value="<?php //echo $val_var; ?>" name="code_elt"  -->

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">code agent</label>
						</div>
						<div class="col-sm-8">
						<?php
								$val_var = !empty(set_value('code_agent')) ? set_value('code_agent') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="code_agent">
							<?php echo form_error('code_agent', '<div class="error">', '</div>'); ?>
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
							<label class="text-center">Prenom</label>
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
							<label class="text-center">Sex</label>
						</div>
						<div class="col-sm-8">
                        <?php
							$options = array(
								''	=> 'Choisir...',
								'M'	=> 'Masculin',
								'F'	=> 'Féminin',
							);

							$val_var = !empty($this->input->post('sex')) ? $this->input->post('sex') : '';
							echo form_dropdown('sex', $options, $val_var, " class='form-select'");

							?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">email</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('email')) ? set_value('email') : '';
							?>
							<input type="email" class="form-control" value="<?php echo $val_var; ?>" name="email">
							<?php echo form_error('email', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Observation</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('observation')) ? set_value('observation') : '';
							?>
							<!-- <input type="text" class="form-control" value="" name="description"> -->
							<textarea name="observation"  class="form-control" 
                                            rows="2"><?php echo $val_var; ?></textarea>
							<?php echo form_error('observation', '<div class="error">', '</div>'); ?>
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


					<!--div class="row mb-3">
					<div class="col-sm-4">
						<label class="text-center">Structure</label>
					</div>
					<div class="col-sm-8">
						<select name="id_structure_deposant" id="id_structure_deposant" class="form-select" required="" aria-required="true">
							<?php
							//echo gen_option_for_a_select($dt_struct);
							?>
						</select>                            
						<?php //echo form_error('id_structure_deposant', '<div class="error">', '</div>'); 
						?>
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