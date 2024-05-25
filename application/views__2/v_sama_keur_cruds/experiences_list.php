<?php show_breadcrumbs($breadcrumbs);   ?>


<!-- Page-Title -->
<?php
//if (!empty($rdc2_rights['add'])) 
{
?>
    <div class='row'>
        <div class='col-sm-12' style='margin-bottom: 30px'>
            <a href="<?php echo site_url('ajouter-une-experience');  ?>">
                <button style="background-color: #012970; color:white" id='btn_add' class='btn' type='button' id='btn_add' class='btn btn-info'>Nouveau <span class='m-l-5'><i class='fa fa-plus-square'></i></span></button>
            </a>
        </div>
    </div>
<?php
}
?>

<div class="modal fade" id="div_popup_img" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmer la suppression!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Choisir l'image?

                <form action="<?php echo site_url('traiter-fichier-experience'); ?>" id="form_cour_divcrud" class="form-horizontal" method="post" enctype="multipart/form-data" novalidate="novalidate">

                    <input type='hidden' class='hidden_id_img' name='hidden_id_img' value="" />

                    <div class="form-body">
                        <div class="row">
                            <div class="col-10">

                                <div class="form-group row">
                                <!--select name="pets" id="pet-select" required>
                                    <option value="">...</option>
                                    <option value="1">Je valide</option>
                                </select-->

                                    <label class="control-label col-md-3">Image <span class="text-danger"></span></label>
                                    <div class="col-md-9">
                                        <input name="img_banner" id="img_banner" class="form-control error" type="file" required='required' required="true" />
                                            <label id="img_banner-error" class="error" for="img_banner">Ce champ est obligatoire.</label>
                                    </div>
                                </div>  

                            </div>
                        </div>	
                    </div>
                    <input type="submit" class="btn btn-primary-2" id="autorisation_control" value="Enregistrer" >
                </form>

            </div>
            <!--div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-send-img">Enregistrer l'image</button>
            </div-->
        </div>
    </div>
</div>

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
                                        <th>Type</th>
                                        <th>Libellé</th>
                                        <th>Période</th>
                                        <th>Entreprise</th>
                                        <th>Date saisie</th>
                                        <th>Image</th>
                                        <th>Statut</th>
                                        <th>Action</th>
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
                                                <td><?php echo $value->_type_exp; ?> &nbsp;&nbsp;</td>
                                                <td><?php echo $value->libelle; ?></td>
                                                <td><?php 
                                                if(empty($value->date_debut) && empty($value->date_fin))
                                                {
                                                    echo "Non renseignée";
                                                }
                                                else
                                                {
                                                    echo date_parse_en2fr_short($value->date_debut); 
                                                    if(!empty($value->date_fin))
                                                        echo '-'.date_parse_en2fr_short($value->date_fin);
                                                }

                                                ?></td>
                                                <td ><?php echo $value->entreprise_lieu; ?> </td>
                                                <td><?php echo $value->date_creation; ?> &nbsp; </td>
                                                <td align='center'>
                                                    <?php 
                                                    if(!empty($value->image))
                                                    {
                                                        ?>
                                                        <a href="<?php  echo site_url('supprimer-image-exp/'.$value->id) ?>" class="on-default " num_img="1" id="<?php echo $value->id; ?>"   >
                                                                <span lass="m-l-5"><i class="fa fa-scissors" style="color:red"></i></span>
                                                        </a>  
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <a href="#" class="on-default btn_add_img" num_img="1" id="<?php echo $value->id; ?>"  data-bs-toggle="modal" data-bs-target="#div_popup_img"          >
                                                                <span lass="m-l-5"><i class="fa fa-plus-square"></i></span>&nbsp; 
                                                        </a> 
                                                        <?php 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                  
                                                    <a href="<?php echo site_url('params-details-experiences/' . $value->id);  ?>" class='on-default btn_edit' id='<?php echo $value->id; ?>'>
                                                        <?php show_state_color($value->etat); ?>
                                                    </a>
                                                
                                                </td>
                                                <td align='center'>
                                                <!--a href='#' class='on-default btn_delete' id='<?php echo $value->id; ?>' data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                        <i class='fa fa-eye' style='color:green'></i>
                                                    </a>

                                                <a href='#' class='on-default btn_delete' id='<?php echo $value->id; ?>' data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                        <i class='fa fa-edit' style='color:blue'></i>
                                                    </a-->

                                                    <a href='#' class='on-default btn_delete' id='<?php echo $value->id; ?>' data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                        <i class='fa fa-trash-o' style='color:red'></i>
                                                    </a>
                                                </td>
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
                url: '<?php echo site_url('supprimer-une-experience/') ?>' + id,
                //type: "GET",
                //dataType: "HTML",
                success: function(data) {
                    window.location.replace('liste-des-experiences');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
            $('#verticalycentered').modal('hide');

        });


   
        ///////////////lors de l'ajout d'images
        $(document).on("click", ".btn_add_img", function() {/////////lorsqu'on clique pour supprimer un diplome
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

        $("#autorisation_control").click(function () {  
        //  alert(val_id_materiel);   
            if($('#form_cour_divcrud').valid())
            {
                var formulaire = $("#form_cour_divcrud");
                var url = formulaire.attr('action');
                var form = $("#form_cour_divcrud")[0];//parse kes champs du formulaire et les mettre dans un tableau
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
                        $('#modal_role').modal('hide');//div du parent ds l'autre vue
                    },
                    error: function(jqXHR) {
                        content.html(jqXHR.responseText);
                        content.show();
                    }
                })
                
                }
                return false;
        });

        $('#modal_role').on('hidden.bs.modal', function (event) { //evenement qui s'execute aprés une fermeture total d'un modal 
        // var val_id_prod = $('#id_produit').val(); 
        var href='http://localhost/SGDC/'+'C_articles/index'; 
        callBack_menu(href);

        });





    });
</script>