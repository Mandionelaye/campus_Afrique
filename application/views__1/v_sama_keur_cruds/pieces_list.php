<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="col-lg-12" >
<div class="card" style="padding:5px;margin-bottom:60px;">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

				<table class="table table-striped">
					<tbody>
						<tr>
							<td>
						<h5 class="panel-title"><b><?php echo $date_one_element['prenom']; echo "  " ;echo $date_one_element['nom']; ?></b></h5></td>
					<td><a href="<?php  echo site_url('modifier-pieces') ?>" class='on-default btn_edit' id='<?php //echo $data_one_elt["code_indic"]; ?>'>
						<i class='fa fa-edit fa-lg'></i>
					</a></td>
					</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $date_one_element['email']; ?></td>
						</tr>
						<tr>
							<td>Téléphone 2</td>
							<td><?php echo $date_one_element['tel_2']; ?></td>
						</tr>
						<tr>
							<td>Email 2</td>
							<td><?php echo $date_one_element['email_2']; ?></td>
						</tr>
						<tr>
							<td>Adresse</td>
							<td><?php echo $date_one_element['adresse']; ?></td>
						</tr>
						<tr>
							<td>Carte nationale d'identité</td>
							<td><?php echo $date_one_element['cni']; ?></td>
						</tr>
						<tr>
							<td>Passport</td>
							<td><?php echo $date_one_element['passport']; ?></td>
						</tr>
						<tr>
							<td>Extrait de naissance</td>
							<td><?php echo $date_one_element['extrait_naissance']; ?></td>
						</tr>
						<tr>
							<td>Photo</td>
							<td><?php echo $date_one_element['photo']; ?></td>
						</tr>
						<tr>
							<td><b>Diplôme le plus élevé:</b><?php echo $date_one_element['cand_niveau_etude']; ?></td>
							<td><b>Niveau d'études:</b><?php echo $date_one_element['cand_experiences']; ?></td>
						</tr>
					</tbody>
				</table>

		<!--end du row -->


	</div>
</div>
</div>


</main>