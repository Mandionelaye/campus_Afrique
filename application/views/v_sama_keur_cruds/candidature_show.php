<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card mb-5">
    <div class="card-body">
        <h5 class="card-title"><?php echo $title ?></h5>

        <div class="row">
            <div class="col-lg-10">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Avis du Jury</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p><?php echo $dt_one_element['avis_du_jury']; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td>Libellé de l'offre</td>
                            <td><strong><?php 
							//demba_debug( $dt_one_element);
							echo $dt_one_element['_offre']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Code candidat</td>
                            <td><strong><?php echo $dt_one_element['code_candidat']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Date dépot</td>
                            <td><strong><?php echo $dt_one_element['date_creation']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Montant payé</td>
                            <td><strong><?php echo $dt_one_element['montant_a_payer']; ?> FCFA</strong></td>
                        </tr>
                        <tr>
                            <td>Etablissement</td>
                            <td><strong><?php echo $dt_one_element['nomEcole']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Email de contact</td>
                            <td><strong><?php echo $dt_one_element['email']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Lien du site</td>
                            <td>
                                <a href="<?php echo $dt_one_element['lien_site']; ?>">
                                    <strong><?php echo $dt_one_element['lien_site']; ?></strong>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Niveau d'étude</td>
                            <td><strong><?php echo $dt_one_element['cand_niveau_etude']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Etat de la candidature</td>
                            <td>
                                <?php
									if ($dt_one_element['etat']== 'depot_en_cours') {
										echo "<span class='badge' style='background-color:blue'> &nbsp &nbsp  Depot en cours &nbsp &nbsp </span>";
									} else if ($dt_one_element['etat'] == 'concour') {
										echo "<span class='badge bg-info'> &nbsp  Concours d'admission &nbsp </span>";}
										else if ($dt_one_element['etat'] == 'accepter') {
											echo "<span class='badge bg-success'> &nbsp  Accepter &nbsp </span>";}
											else if ($dt_one_element['etat'] == 'test') {
												echo "<span class='badge bg-primary'> &nbsp  Test d'admission &nbsp </span>";}
												else if ($dt_one_element['etat'] == 'refuser') {
													echo "<span class='badge bg-danger'> &nbsp  Refuser &nbsp </span>";}
													else {
														echo "<span class='badge' style='background-color:orange'> &nbsp  Cloturé &nbsp </span>";}								
								?>
                            </td>
                        </tr>
                        <tr>
                            <td>Avis du jury</td>
                            <td>
                                <button type="button" class="btn text-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    voir
                                </button>
                            </td>
                        </tr>

                        <!-- <tr>
							<td>Date dernière modification</td>
							<td><strong><?php echo $dt_one_element['date_last_modif']; ?></strong></td>
						</tr -->
                    </tbody>
                </table>
            </div>

        </div>
        <!--end du row -->


    </div>
</div>


</main>