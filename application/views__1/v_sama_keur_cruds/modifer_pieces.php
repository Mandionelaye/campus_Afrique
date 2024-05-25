<div class="row">
	<div class='panel panel-default'>
	<div class='panel-heading'>
		<h3 class='panel-title'><?php  echo $title; ?></h3>
	</div>
	<div class='panel-body'>

		<form method="POST" name="validation" action="<?php echo site_url('modifier-pieces'); ?>">

			<div class="col-sm-6">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>
							<td>Niveau d'études</span></td>
							<td>
							<?php
								$dat_list_ann = array(
									'' => "Choisir..." ,
									'aucun' => "Aucun" ,
									'cfee' => 'cfee' ,
									'bfem' => 'bfem' ,
									'tle' => 'tle' ,
									'Bac' => 'Bac' ,
									'Bac+1' => 'Bac+1' ,
									'Bac+2' => 'Bac+2' ,
									'Bac+3' => 'Bac+3' ,
									'Bac+4' => 'Bac+4' ,
									'Bac+5' => 'Bac+5' ,
									'>Bac+5' => '>Bac+5' ,
								);
								//$data['data_one_elt']['cand_niveau_etude']

								$val_var = !empty($this->input->post('cand_niveau_etude')) ? $this->input->post('cand_niveau_etude') : $data_one_elt['cand_niveau_etude'];
								echo form_dropdown('cand_niveau_etude', $dat_list_ann, $val_var, " class='form-select'");
							?>
								<?php echo form_error('cand_niveau_etude', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						<tr>
							<td>Expériences en années</span></td>
							<td>
								<?php
								$dat_list_ann = array(
									'' => "Choisir..." ,
									'0' => "moins d'un an" ,
									'1' => 'un an' ,
									'2' => '2 ans' ,
									'3' => '3 ans' ,
									'4' => '4 ans' ,
									'5' => '5 ans' ,
									'6' => '6 ans' ,
									'7' => '7 ans' ,
									'8' => '8 ans' ,
									'9' => '9 ans' ,
									'10' => '10 ans' ,
									'11' => '11 ans' ,
									'12' => '12 ans' ,
									'13' => '13 ans' ,
									'14' => '14 ans' ,
									'15' => '15 ans' ,
									'16' => '16 ans' ,
									'17' => '17 ans' ,
									'18' => '18 ans' ,
									'19' => '19 ans' ,
									'20' => '20 ans' ,
									'99' => '+20 ans' ,
								);
								$val_var = !empty($this->input->post('cand_experiences')) ? $this->input->post('cand_experiences') : $data_one_elt['cand_experiences'];
								echo form_dropdown('cand_experiences', $dat_list_ann, $val_var, " class='form-select'");
								?>
								<?php echo form_error('cand_experiences', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						<tr>
							<td>Téléphone 2</span></td>
							<td>
								<?php   $val_elt = !empty($this->input->post('tel_2'))?$this->input->post('tel_2'):$data_one_elt['tel_2'];  ?>
								<input type="text" class="form-control" value="<?php echo $val_elt  ; ?>" name="tel_2" >
								<?php echo form_error('tel_2', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						<tr>
							<td>Email 2</td>
							<td>
								<?php   $val_elt = !empty($this->input->post('email_2'))?$this->input->post('email_2'):$data_one_elt['email_2'];  ?>
								<input type="text" class="form-control" value="<?php echo $val_elt; ?>"  name="email_2" >
								<?php echo form_error('email_2', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						<tr>
							<td>Adresse </span></td>
							<td>
								<?php   $val_elt = !empty($this->input->post('adresse'))?$this->input->post('adresse'):$data_one_elt['adresse'];  ?>
								<input type="text" class="form-control" value="<?php echo $val_elt; ?>" name="adresse" >
								<?php echo form_error('adresse', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						<tr>
							<td>Carte nationale d'identité</td>
							<td>
								<?php   $val_elt = !empty($this->input->post('cni'))?$this->input->post('cni'):$data_one_elt['cni'];  ?>
								<input type="text" class="form-control" value="<?php echo $val_elt; ?>"  name="cni" >
								<?php echo form_error('cni', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						<tr>
							<td>Passport</td>
							<td>
								<?php   $val_elt = !empty($this->input->post('passport'))?$this->input->post('passport'):$data_one_elt['passport'];  ?>
								<input type="text" class="form-control" value="<?php echo $val_elt; ?>"  name="passport" >
								<?php echo form_error('passport', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						
						<tr>
							<td>Extrait de naissance </span></td>
							<td>
								<?php   $val_elt = !empty($this->input->post('extrait_naissance'))?$this->input->post('extrait_naissance'):$data_one_elt['extrait_naissance'];  ?>
								<input type="text" class="form-control" value="<?php echo $val_elt; ?>" name="extrait_naissance" >
								<?php echo form_error('extrait_naissance', '<div class="error">', '</div>'); ?>
							</td>
						</tr>
						
					</tbody>
				</table>
				
				<div align="center"><button type="submit" style="padding:15px 100px 15px 100px;font-weight:bold" class="btn btn-primary">Enregistrer</button></div>

			</div>
			
			<p>&nbsp;</p>
			<hr>
		</form>
		
	</div>
	
</div>
