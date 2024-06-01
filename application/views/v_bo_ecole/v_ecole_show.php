<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card mb-5">
    <div class="card-body">
        <h5 class="card-title"><?php echo $title ?></h5>

        <div class="row">
            <div class="col-lg-10">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td>Code Agent</td>
                            <td><strong><?php echo $date_one_element['code_agent']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Libelle</td>
                            <td><strong><?php echo $date_one_element['libelle']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><strong><?php echo $date_one_element['email']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Lien Site</td>
                            <td><strong> <a href="<?php echo $date_one_element['lien_site']; ?>">
                                        <?php echo $date_one_element['lien_site']; ?>
                                    </a></strong></td>
                        </tr>
                        <tr>
                            <td>Téléphone</td>
                            <td><strong><?php echo $date_one_element['numero']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><strong><?php echo $date_one_element['description']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td><strong><?php echo $date_one_element['adresse']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Date de creation</td>
                            <td><strong><?php echo $date_one_element['date_creation']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Date du dernier modification</td>
                            <td><strong><?php echo $date_one_element['date_lastmotif']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Etat</td>
                            <td><strong><?php echo show_state_color($date_one_element['etat']); 
                            if ($date_one_element['etat'] == 'actif') {

                                echo "<span class='badge bg-success' > &nbsp &nbsp  actif &nbsp &nbsp </span>";
                            } else{
                                echo "<span class='badge bg-danger'> &nbsp  colse &nbsp </span>";
                            }
                            ?>

                                </strong></td>
                        </tr>
                        <tr>
                            <td>Supprimé?</td>
                            <td><a href=<?php   echo site_url('supprimer-Etablissement/'.$code_elt) ?>><button type="button"
                                        class="btn btn-danger">Cliquer ici pour supprimer</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!--end du row -->


    </div>
</div>
</main>