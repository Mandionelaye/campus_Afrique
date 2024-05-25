<?php show_breadcrumbs($breadcrumbs);   ?>

<div class="modal fade" id="div_popup_img" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un fichier image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?php echo site_url('traiter-fichier-pieces'); ?>" id="form_cour_divcrud" class="form-horizontal requires-validation" novalidate method="post" enctype="multipart/form-data" novalidate="novalidate">

                    <input type='hidden' class='hidden_id_img' name='hidden_id_img' value="" />

                    <div class="form-body">
                        <div class="row">
                            <div class="col-10">

                                <div class="form-group row">
                                    <!--select name="pets" id="pet-select" required>
                                    <option value="">...</option>
                                    <option value="1">Je valide</option>
                                </select-->

                                    <label class="control-label col-md-3"> <span class="text-danger"></span></label>
                                    <div class="col-md-10">
                                        <input name="img_banner" id="img_banner" class="form-control" required type="file" />
                                        <div class="valid-feedback">
                                            Image validée
                                        </div>
                                        <div class="invalid-feedback">
                                            Veuillez renseigner une image
                                        </div>
                                        <script>
                                            (function() {
                                                'use strict'
                                                const forms = document.querySelectorAll('.requires-validation')
                                                Array.from(forms)
                                                    .forEach(function(form) {
                                                        form.addEventListener('submit', function(event) {
                                                            if (!form.checkValidity()) {
                                                                event.preventDefault()
                                                                event.stopPropagation()
                                                            }

                                                            form.classList.add('was-validated')
                                                        }, false)
                                                    })
                                            })()
                                        </script>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn" style="background-color: #012970; color:white;margin-top:14px;" id="autorisation_control" value="Enregistrer">
                </form>

            </div>
            <!--div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-send-img">Enregistrer l'image</button>
            </div-->
        </div>
    </div>
</div><!-- End Vertically centered Modal-->

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
							<td>
							<?php

if (!empty($date_one_element['photo'])) {
	$image = $date_one_element['photo'];
	$extension = pathinfo($image, PATHINFO_EXTENSION);
	switch ($extension) {
		case "jpg": ?>
			<img id="myImage" src="<?php echo base_url('j0kimpl8ldq/pieces/' . $date_one_element['photo']); ?>" width="300" height="200">
			<a  href="<?php echo site_url('supprimer-image-pieces-ok/' . $date_one_element['id']) ?>" class="on-default " num_img="1" id="<?php echo $date_one_element['id']; ?>">
												<span lass="m-l-5">          <i style="color:red" class="ri-delete-bin-6-fill"></i>
</i></span>
											</a>
		<?php break;
		case "jpeg": ?>
			<img id="myImage" src="<?php echo base_url('j0kimpl8ldq/pieces/' . $date_one_element['photo']); ?>" width="300" height="200">
			<a  href="<?php echo site_url('supprimer-image-pieces-ok/' . $date_one_element['id']) ?>" class="on-default " num_img="1" id="<?php echo $date_one_element['id']; ?>">
												<span lass="m-l-5">          <i style="color:red" class="ri-delete-bin-6-fill"></i>
</span>
											</a>
		<?php break;
		case "png": ?>
			<img id="myImage" src="<?php echo base_url('j0kimpl8ldq/pieces/' . $date_one_element['photo']); ?>" width="300" height="200">
			<a  href="<?php echo site_url('supprimer-image-pieces-ok/' . $date_one_element['id']) ?>" class="on-default " num_img="1" id="<?php echo $date_one_element['id']; ?>">
												<span lass="m-l-5">          <i style="color:red" class="ri-delete-bin-6-fill"></i>
</span>
											</a>
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
							
                            </td>
						</tr>
						<tr>
							<td><b>Diplôme le plus élevé(Niveau d'études):</b><?php echo $date_one_element['cand_niveau_etude']; ?></td>
							<td><b>Nbr années expérience:</b> <?php echo $date_one_element['cand_experiences']; ?></td>
						</tr>
					</tbody>
				</table>

		<!--end du row -->


	</div>
</div>
</div>


</main>



<script type="text/javascript">
    $(document).ready(function() {

        $(document).on("click", ".btn_delete", function() { /////////lorsqu'on clique pour supprimer un diplome
            var passedID = $(this).attr('id');
            $(".modal-body .hiddenid ").val(passedID);
        });

        $(".btn-primary").click(function() {
            var id = $(".hiddenid").val();
            $.ajax({
                url: '<?php echo site_url('supprimer-un-diplome/') ?>' + id,
                //type: "GET",
                //dataType: "HTML",
                success: function(data) {
                    window.location.replace('liste-des-diplomes');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
            $('#verticalycentered').modal('hide');

        });



        ///////////////lors de l'ajout d'images
        $(document).on("click", ".btn_add_img", function() { /////////lorsqu'on clique pour supprimer un diplome
            var passedID = $(this).attr('id');
            // alert(passedID);
            $(".modal-body .hidden_id_img ").val(passedID);
        });

        /*
        $(".btn-send-img").click(function() {
            var id = $(".hidden_id_img").val();
            $.ajax({
                url: '<?php echo site_url('supprimer-un-diplome/') ?>' + id,
                //type: "GET",
                //dataType: "HTML",
                success: function(data) {
                    window.location.replace('liste-des-diplomes');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
            $('#verticalycentered').modal('hide');

        });
        */


        //$('#form_cour_divcrud').validate();//on valide d'bord le formulaire

        $("#autorisation_control").click(function() {
            //  alert(val_id_materiel);   
            if ($('#form_cour_divcrud').valid()) {
                var formulaire = $("#form_cour_divcrud");
                var url = formulaire.attr('action');
                var form = $("#form_cour_divcrud")[0]; //parse kes champs du formulaire et les mettre dans un tableau
                $.ajax({
                    url: url,
                    type: 'POST',
                    enctype: 'multipart/form-data',
                    data: new FormData(form),
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'Text',
                    success: function(data) {
                        $('#modal_role').modal('hide'); //div du parent ds l'autre vue
                    },
                    error: function(jqXHR) {
                        content.html(jqXHR.responseText);
                        content.show();
                    }
                })

            }
            return false;
        });

        $('#modal_role').on('hidden.bs.modal', function(event) { //evenement qui s'execute aprés une fermeture total d'un modal 
            // var val_id_prod = $('#id_produit').val(); 
            var href = 'http://localhost:81/02__pplus/04__gest_candidatures/' + 'C_articles/index';
            callBack_menu(href);

        });





    });
</script>
<script>
    window.onload = function() {
        // Get a reference to the image element
        var img = document.getElementById("myImage");

        // Define the new width and height
        var newWidth = 300; // Change this to the desired width
        var newHeight = 200; // Change this to the desired height

        // Set the new width and height
        img.width = newWidth;
        img.height = newHeight;
    };
</script>