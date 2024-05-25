<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>


	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">

			<div class="well">
				<form method="POST" name="validation" action="<?php  echo site_url('params-ajouter-lieux')  ?>">
					<?php //a dynamiser
						//$val_var = !empty(set_value('code_elt')) ? set_value('code_elt') : $code_elt;
					?>
					<!--input type="hidden" value="<?php //echo $val_var; ?>" name="code_elt"  -->


					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Niveau</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('niveau')) ? set_value('niveau') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="niveau">
							<?php echo form_error('niveau', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Type</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('type')) ? set_value('type') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="type">
							<?php echo form_error('type', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Id parent</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('id_parent')) ? set_value('id_parent') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="id_parent">
							<?php echo form_error('id_parent', '<div class="error">', '</div>'); ?>
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Code syscol</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('code_syscol')) ? set_value('code_syscol') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="code_syscol">
							<?php echo form_error('code_syscol', '<div class="error">', '</div>'); ?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-sm-4">
							<label class="text-center">Nom lieu</label>
						</div>
						<div class="col-sm-8">
							<?php
								$val_var = !empty(set_value('nom_lieu')) ? set_value('nom_lieu') : '';
							?>
							<input type="text" class="form-control" value="<?php echo $val_var; ?>" name="nom_lieu">
							<?php echo form_error('nom_lieu', '<div class="error">', '</div>'); ?>
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