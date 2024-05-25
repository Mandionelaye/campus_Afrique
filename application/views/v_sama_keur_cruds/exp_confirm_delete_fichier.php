

<div class="card">
	<div class="card-body">
		<h5 class="card-title">Confirmation de la <?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Libellé</td>
							<td><strong><?php echo $dat_one_row['libelle']; ?></strong></td>
						</tr>
						<tr>
							<td>Durée</td>
							<td><strong><?php echo $dat_one_row['date_debut']; ?>-<?php echo $dat_one_row['date_fin']; ?></strong></td>
						</tr>
						
						<tr>
							<td>Entreprise</td>
							<td><strong><?php echo $dat_one_row['entreprise_lieu']; ?></strong></td>
						</tr>
						
						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($dat_one_row['etat']); ?></strong></td>
						</tr>
						
						<tr>
							<td>Image</td>
							<td>

<?php

if (!empty($dat_one_row['image'])) {
	$image = $dat_one_row['image'];
	$extension = pathinfo($image, PATHINFO_EXTENSION);
	switch ($extension) {
		case "jpg": ?>
			<img id="myImage" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $dat_one_row['image']); ?>" width="300" height="200">

		<?php break;
		case "jpeg": ?>
			<img id="myImage" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $dat_one_row['image']); ?>" width="300" height="200">

		<?php break;
		case "png": ?>
			<img id="myImage" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $dat_one_row['image']); ?>" width="300" height="200">

		<?php break;
		case "docx": ?>
			<a download="mon_diplome.docx" href="<?php echo base_url('j0kimpl8ldq/experiences/' . $dat_one_row['image']); ?>">Récupérer le diplome </a>

		<?php break;
		case "pdf": ?>
			<iframe frameborder="0" width="500" height="300" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $dat_one_row['image']); ?>" width="300" height="200"></iframe>

	<?php
	}
} else {
	?>
	<a href="#" class="on-default btn_add_img" num_img="1" id="<?php echo $value->id; ?>" data-bs-toggle="modal" data-bs-target="#div_popup_img">
		<span lass="m-l-5"><i class="fa fa-plus-square"></i></span>
	</a>
<?php
}
?>
</td>						</tr>
						
		<?php
		
		?>
		<tr>
			<td>Supprimer</td>
			<td><a href=<?php   echo site_url('supprimer-image-exp-ok/'.$dat_one_row['id']) ?> ><button type="button" class="btn btn-danger">Cliquer ici pour supprimer</button></a></td>
		</tr>

		<?php
			
		?>

					</tbody>
				</table>
			</div>

		</div>
		<!--end du row -->


	</div>
</div>


<script>
    window.onload = function() {
        // Get a reference to the image element
        var img = document.getElementById("myImage");

        // Define the new width and height
        var newWidth = 300; // Change this to the desired width
        var newHeight = 300; // Change this to the desired height

        // Set the new width and height
        img.width = newWidth;
        img.height = newHeight;
    };
</script>
