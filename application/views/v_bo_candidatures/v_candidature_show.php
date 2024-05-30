<?php show_breadcrumbs($breadcrumbs);   ?>

<style>
    .moi{
        display: none;
    }
</style>

<div class="card mb-5">
    <div class="card-body">
        <h5 class="card-title"><?php echo $title ?></h5>
        <!-- Modal -->
        <div class="modal fade dieul" class="modal fade" id="" tabindex="-1" 
		aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Avis du jury</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" novalidate method="post"
                                enctype="multipart/form-data" novalidate="novalidate" id="form">
                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Motife</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="avis_du_jury" class="form-control"
                                        rows="3"></textarea>
                                </div>
                            </div>
                            <!-- concour et test -->
                            <div id="addForm" class="moi">
                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                                <div class="col-md-8 col-lg-9">
                               <input type='date' class='form-control' id='inputGroupFile01' name="date">
                               </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Heure</label>
                                <div class="col-md-8 col-lg-9">
                               <input type='time' class='form-control' id='inputGroupFile01' name="heure">
                               </div>
                            </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ferme</button>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td>Code candidat</td>
                            <td><strong><?php echo $date_one_element['code_candidat']; ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Code Depot</td>
                            <td><strong><?php echo $date_one_element['code_depot']; ?></strong></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Offre</td>
                            <td><strong><?php echo $date_one_element['_offre']; ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Montant Inscription</td>
                            <td><strong><?php echo $date_one_element['montant_a_payer']; ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Niveau d'etude</td>
                            <td><strong><?php echo $date_one_element['cand_niveau_etude']; ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mode paiement</td>
                            <td><strong><?php echo $date_one_element['mode_paie']; ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Date Creation</td>
                            <td><strong><?php echo $date_one_element['date_creation']; ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Etat</td>
                            <td><strong>

                                    <?php
								if ($date_one_element['etat'] == 'depot_en_cours') {

									echo "<span class='badge' style='background-color:blue'> &nbsp &nbsp  Depot en cours &nbsp &nbsp </span>";
								} else if ($date_one_element['etat'] == 'concour') {
									echo "<span class='badge bg-info'> &nbsp  Concours d'admission &nbsp </span>";}
									else if ($date_one_element['etat'] == 'accepter') {
										echo "<span class='badge bg-success'> &nbsp  Accepter &nbsp </span>";}
										else if ($date_one_element['etat'] == 'test') {
											echo "<span class='badge bg-primary'> &nbsp  Test d'admission &nbsp </span>";}
											else if ($date_one_element['etat'] == 'refuser') {
												echo "<span class='badge bg-danger'> &nbsp  refuser &nbsp </span>";}
                                                else if ($date_one_element['etat'] == 'depot_en_cours') {
                                                    echo "<span class='badge bg-danger'> &nbsp  depot en cours &nbsp </span>";}
												else {
													echo "<span class='badge' style='background-color:orange'> &nbsp  Cloturé &nbsp </span>";}
																	
								?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Saisie par</td>
                            <td><strong><?php echo $date_one_element['prenom']; ?>
                                    <?php echo $date_one_element['nom']; ?></strong></td>
                            <td></td>
                        </tr>
                        <?php
		//our voir s'il est autorisé a supprimer
			if (!empty($rdc2_rights['delete'])) 
			{
		?>
                        <tr>
                            <td><a href=<?php   echo site_url('voir-profil-du-candidat/'.$code_elt) ?>><button
                                        type="button" class="btn btn-primary">Voir son profil</button></a></td>
                            <td><a href="" 
							data-bs-toggle="modal" id="refuser" data-bs-target="#exampleModal">
							<button type="button"
                                        class="btn btn-danger">Rejeter la candidature</button></a></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Avis du jury
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" id="accepter"
                                                data-bs-target="#exampleModal1"
                                                href="<?php   echo site_url('presel-candidature/'.$code_elt) ?>">Accepter</a>
                                        </li>
                                        <li>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" id="test"
                                                data-bs-target="#exampleModal3">Faire un Test </a>
											</li>
                                        <li>
											<a class="dropdown-item" href="#"data-bs-toggle="modal" id="concour"
                                                data-bs-target="#exampleModal2">Faire un Concours </a>
										</li>
                                    </ul>
                                </div>
                            </td>
                            <!-- <td><a href=<?php   echo site_url('presel-candidature/'.$code_elt) ?> ><button type="button" class="btn btn-success">Présélectionner</button></a></td> -->

                        </tr>
                        <?php
			}
		?>

                    </tbody>
                </table>
            </div>

        </div>
        <!--end du row -->


    </div>
</div>
</main>

<script type="text/javascript">
    function getImageFromInput( value, valueUrl) {
            $('.dieul').attr('id', value);
            $('#form').attr('action', valueUrl);
            console.log("Image récupérée :",  $('#form').attr('action'));  
            if(value === 'exampleModal3' || value === 'exampleModal2') {
                $('#addForm').show();
            }else{
                $('#addForm').hide();
            }
     }
$(document).ready(function() {
	$('#accepter').on( "mouseenter",function () {
        getImageFromInput('exampleModal1', "<?php   echo site_url('presel-candidature/'.$code_elt) ?>");
    });

	$('#concour').on( "mouseenter",function () {
        getImageFromInput('exampleModal2', "<?php   echo site_url('concour-candidature/'.$code_elt) ?>");
    });

	$('#test').on( "mouseenter",function () {
        getImageFromInput('exampleModal3', "<?php   echo site_url('test-candidature/'.$code_elt) ?>");
    });

	$('#refuser').on( "mouseenter",function () {
        getImageFromInput('exampleModal', "<?php   echo site_url('rejet-candidature/'.$code_elt) ?>");
    });
})
</script>