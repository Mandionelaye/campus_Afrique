<?php show_breadcrumbs($breadcrumbs);  ?>


<!-- Page-Title -->
<?php
if (!empty($rdc2_rights == 'add')) 
{
?>
    <div class='row'>
        <div class='col-sm-12' style='margin-bottom: 30px'>
            <a href="<?php echo site_url('ajouter-Etablissement');  ?>">
                <button type='button' style="background-color: #012970; color:white" id='btn_add' class='btn'>Nouveau <span class='m-l-5'><i class='fa fa-plus-square'></i></span></button>
            </a>
        </div>
    </div>
<?php
}
?>

<style>
    .img{
        width: 100px;
    }
</style>

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

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
                <div class="panel-heading">
                  <!-- div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span> Liste des paiements en retard </div -->
                </div>

            <div class="panel-body" style="padding-bottom: 100px;">
                
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    } );
                } );
                </script>
                <table   id="example"   class="display  table table-bordered ">
                    <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Libellé</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Adrésse</th>
                        <th>Commentaires</th>
                        <th>Date de creation</th>
                        <th>Statut</th>
                    </tr>
                    </thead>
                    <tbody>
                                    <?php foreach ($all_data as $value) 
                                    {
                                     //   if($site_name == $value->id_source || $site_name=='ANSD')
                                      //  {
                                            ?>
                                            <tr>
                                                <td> <img src="<?=$value["logo"]?'j0kimpl8ldq/logo/'.$value["logo"]:'assets/img/ecole.png'?>" alt="Profile" class="rounded-circle img"/></td>
                                                <td><?php echo $value["libelle"]; ?></td>
                                                <td><?php echo $value["email"]; ?></td>
												<td><?php echo $value["numero"]; ?></td>
                                                <td><?php echo $value["adresse"]; ?></td>
												<td><?php echo $value["commentaires"]; ?></td>
                                                <td><?php echo $value["date_creation"]; ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('details-candidat/' . $value["id"]);  ?>" class='on-default btn_edit' id='<?php echo $value->id; ?>'>
                                                    <?php 
                                                        if($value["etat"]=='actif')
                                                            {

                                                                echo "<span class='badge bg-success rounded-pill'>  &nbsp  &nbsp Actif &nbsp &nbsp </span>"; 

                                                            }
                                                        else
                                                            echo "<span class='badge bg-danger rounded-pill'> &nbsp; Inactif &nbsp; </span>"; 
                                                    ?>
                                                    </a>
                                                </td>
                                                <!--td>
                                                    <a href="<?php //echo site_url('params-details-collectes/' . $value->id);  ?>" class='on-default btn_edit' id='<?php echo $value->id; ?>'>
                                                        <?php //show_state_color($value->statut); ?>
                                                    </a>
                                                </td-->
                                               
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
                url: '<?php echo site_url('params-supprimer-collectes/') ?>' + id,
                //type: "GET",
                //dataType: "HTML",
                success: function(data) {
                    window.location.replace('params-collectes');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
            $('#verticalycentered').modal('hide');

        });


    });
</script>