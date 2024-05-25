<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
			<?php if($this->session->flashdata("error")) {?>
            <div class="alert alert-danger" role="alert">
                erreur de modification
            </div>
            <?php } ?>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Categorie</td>
							<td><strong><?php echo $date_one_element['_categ_offre']; ?></strong></td>
						</tr>
						<tr>
							<td>Libellé</td>
							<td><strong><?php echo $date_one_element['libelle']; ?></strong></td>
						</tr>
						<tr>
							<td>Date d'ouverture</td>
							<td><strong><?php echo $date_one_element['date_publication']; ?></strong></td>
						</tr>
						<tr>
							<td>Date de fermeture</td>
							<td><strong><?php echo $date_one_element['date_cloture']; ?></strong></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><strong><?php echo $date_one_element['description']; ?></strong></td>
						</tr>

						<tr>
							<td>Désignation</td>
							<td><strong><?php echo $date_one_element['text_details']; ?></strong></td>
						</tr>

						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($date_one_element['etat']); ?></strong></td>
						</tr>
						<tr>
							<td><a href="<?=site_url('offre-delete/'.$date_one_element['id'])?>" class="btn btn-danger">delete</a></td>
							<td><a  href="<?=site_url('offre-edite/'.$date_one_element['id'])?>" class="btn btn-primary me-3">editer</a>
							<?php if (!$data_resp) { ?>
							<a href="<?=site_url('add_responsable/'.$date_one_element['id'])?>" class="btn btn-success">ajoter un responsable</a></td>
							<?php } ?>
							<!-- <td><strong><?php //echo $date_one_element['_id_op_saisie']; ?></strong></td> -->
						</tr>
					</tbody>
				</table>
				
			</div>

		</div>
		<!--end du row -->


	</div>
</div>
 <?php if ($data_resp) { ?>
<div class="card mb-5 mt-3">
	<div class="card-body ">
		<h5 class="card-title"><?php echo $title2 ?></h5>

		<div class="row">
			<div class="col-lg-10">
			<?php if($this->session->flashdata("error")) {?>
            <div class="alert alert-danger" role="alert">
                erreur de modification
            </div>
            <?php } ?>
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Code Agent</td>
							<td><strong><?php echo $data_resp['code_agent']; ?></strong></td>
						</tr>
						<tr>
							<td>Nom</td>
							<td><strong><?php echo $data_resp['nom']; ?></strong></td>
						</tr>
						<tr>
							<td>Prenom</td>
							<td><strong><?php echo $data_resp['prenom']; ?></strong></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><strong><?php echo $data_resp['email']; ?></strong></td>
						</tr>
						<tr>
							<td>Sex</td>
							<td><strong><?php echo $data_resp['sex']; ?></strong></td>
						</tr>

						<tr>
							<td>Observation</td>
							<td><strong><?php echo $data_resp['observation']; ?></strong></td>
						</tr>

						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($data_resp['etat']); ?></strong></td>
						</tr>
						<tr>
							<td><a href="<?=site_url('delete_responsable/'.$data_resp['id'])?>" class="btn btn-danger">delete</a></td>
							<td><a  href="<?=site_url('offre-edite/'.$data_resp['id'])?>" class="btn btn-primary me-3">editer</a>
							<!-- <td><strong><?php //echo $date_one_element['_id_op_saisie']; ?></strong></td> -->
						</tr>
					</tbody>
				</table>
				
			</div>

		</div>
		<!--end du row -->


	</div>
</div>
<?php } ?>
</main>