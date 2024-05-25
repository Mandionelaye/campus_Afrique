<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('params-ajouter-langue')  ?>">
					<?php //a dynamiser
						//$val_var = !empty(set_value('code_elt')) ? set_value('code_elt') : $code_elt;
					?>
					<!--input type="hidden" value="<?php //echo $val_var; ?>" name="code_elt"  -->


					
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Libellé</label>
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
							<label class="text-center">commentaires</label>
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