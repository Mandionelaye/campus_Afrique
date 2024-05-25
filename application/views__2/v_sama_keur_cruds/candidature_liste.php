<?php show_breadcrumbs($breadcrumbs);   ?>


<!-- Page-Title -->
<?php
//if (!empty($rdc2_rights['add'])) 
{
?>
    <div class='row'>
        <div class='col-sm-12' style='margin-bottom: 30px'>
            <a href="<?php echo site_url('ajouter-candidature');  ?>">
                <button style="background-color: #012970; color:white" id='btn_add' class='btn' type='button' id='btn_add' class='btn btn-info'>Nouveau <span class='m-l-5'><i class='fa fa-plus-square'></i></span></button>
            </a>
        </div>
    </div>
<?php
}
?>



<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmer la suppression!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Confirmer-vous la suppression de l'élément?
                <input type='hidden' class='hiddenid' name='hiddenid' value="" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Supprimer</button>
            </div>
        </div>
    </div>
</div><!-- End Vertically centered Modal-->


<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-default'>
            <div class='panel-body'>

                <div class='card'>
                    <div class=" table-responsive">
                        <div class="col-sm-12">
                            <table id='datatable-buttons' class='datatable table table-striped table-bordered'>
                                <thead>
                                    <tr>
                                        <th>Code Depot</th>
                                        <th>Offre</th>
                                        <th>Montant Inscription</th>
                                        <th>Mode paiement</th>
                                        <th>Date création</th>
                                        <th>Statut</th>
                                        <!--th>Action</th-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
									
									foreach ($all_data as $value) 
                                    {
                                     //   if($site_name == $value->id_source || $site_name=='ANSD')
                                      //  {
                                            ?>
                                            <tr>
                            
                                                <td><?php echo $value->code_depot; ?></td>
                                                <td><?php echo $value->_the_offer; ?></td>
                                                <td><?php echo formatter_montant($value->montant_inscr).' FCFA'; ?></td>
                                                <td><?php echo $value->mode_paie; ?></td>
                                                <td><?php echo $value->date_creation; ?></td>
                                                
                                                 <td>   
                                                    <a href="<?php echo site_url('params-details-ma-candidature/' . $value->id);  ?>" class='on-default btn_edit' id='<?php echo $value->id; ?>'>
                                                    <?php
								if ($value->etat == 'depot_en_cours') {

									echo "<span class='badge' style='background-color:blue'> &nbsp &nbsp  Depot en cours &nbsp &nbsp </span>";
								} else if ($value->etat == 'commission_en_cours') {
									echo "<span class='badge bg-primary'> &nbsp  Commission en cours &nbsp </span>";}
									else if ($value->etat == 'retenu') {
										echo "<span class='badge bg-success'> &nbsp  Retenu &nbsp </span>";}
										else if ($value->etat == 'liste_attente') {
											echo "<span class='badge bg-primary'> &nbsp  En liste attente &nbsp </span>";}
											else if ($value->etat == 'elimine') {
												echo "<span class='badge bg-danger'> &nbsp  Eliminé &nbsp </span>";}
												else {
													echo "<span class='badge' style='background-color:orange'> &nbsp  Cloturé &nbsp </span>";}
																		
								?>
                                                    </a>
                                                </td>
                                                <!--td>
                                                    <a href="<?php //echo site_url('params-details-collectes/' . $value->id);  ?>" class='on-default btn_edit' id='<?php echo $value->id; ?>'>
                                                        <?php //show_state_color($value->statut); ?>
                                                    </a>
                                                </td-->
                                                <!--td align="center">
                                                    <!--style>
                                                        #pn {
                                                            font-size: small;
                                                        }
                                                    </style-->
                                                <!--a href='#' id="pn" class='on-default btn_delete' id='<?php echo $value->id; ?>' data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                        <i class='fa fa-eye' style='color:green'></i>
                                                    </a>
                                                <a href='#' id="pn" class='on-default btn_delete' id='<?php echo $value->id; ?>' data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                        <i class='fa fa-edit' style='color:blue'></i>
                                                    </a-->
                                                <!--a href='#' id="pn" class='on-default btn_delete' id='<?php echo $value->id; ?>' data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                        <i class='fa fa-trash-o' style='color:red'></i>
                                                    </a>
                                                </td -->
                                               
                                            </tr>
                                        <?php
                                        }

                                   
                                  //  }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div> <!-- End Row -->

                                    </main>



<script type="text/javascript">
    $(document).ready(function() {

        $(document).on("click", ".btn_delete", function() {
            var passedID = $(this).attr('id');
            $(".modal-body .hiddenid ").val(passedID);
        });

        $(".btn-primary").click(function() {
            var id = $(".hiddenid").val();
            $.ajax({
                url: '<?php echo site_url('supprimer-une-candidature/') ?>' + id,
                //type: "GET",
                //dataType: "HTML",
                success: function(data) {
                    window.location.replace('liste-des-candidatures');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
            $('#verticalycentered').modal('hide');

        });


    });
</script>