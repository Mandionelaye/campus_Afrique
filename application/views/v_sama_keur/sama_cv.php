<section class="section profile" style="margin-bottom: 60px;">
    <div class="row">
        <div class="col-lg-4">
            <div class="row">
                <div class="col-12" style="margin-bottom: 20px;">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <a href="<?php echo site_url('download'); ?>">Télécharger</a>

                            <img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2><?php echo $date_one_element['prenom']; ?> <?php echo $date_one_element['nom']; ?> </h2>

                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                            &nbsp;
                            &nbsp;
                            <table>

                                </tr>
                                <td class='fw-bold'>Email:</td>
                                <td><?php echo $date_one_element['email']; ?></td>
                                </tr>
                                </tr>
                                <td class='fw-bold'>Téléphone:</td>
                                <td><?php echo $date_one_element['telephone'];
                                    echo $date_one_details['tel_2']; ?></td>
                                </tr>
                                </tr>
                                <td class='fw-bold'>Adresse:</td>
                                <td><?php echo $date_one_element['adresse']; ?></td>
                                </tr>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="col-12" style="margin-bottom: 20px;">
                    <div class='card'>
                        <div class="card-body pt-3">
                            <div class=" table-responsive">

                                <div class="col-sm-4">
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Langues</button>
                                        </li>

                                    </ul>
                                    <table id='datatable-buttons' class='table table-striped table-bordered'>
                                        <thead>
                                            <tr>
                                                <th>Langues</th>
                                                <th>Niveau</th>
                                                <th>Connaissances</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            foreach ($all_data_langues as $value) {
                                                //   if($site_name == $value->id_source || $site_name=='ANSD')
                                                //  {
                                            ?>
                                                <tr>
                                                    <td><?php echo $value->the_label; ?></td>
                                                    <td><?php echo $value->niveau; ?></td>
                                                    <td><?php
                                                        echo $value->_lu . '  ';
                                                        echo $value->_parle . '  ';
                                                        echo $value->_ecrit . '  ';
                                                        ?></td>

                                                    <!--td>
                                                    <a href="<?php //echo site_url('params-details-collectes/' . $value->id);  
                                                                ?>" class='on-default btn_edit' id='<?php echo $value->id; ?>'>
                                                        <?php //show_state_color($value->statut); 
                                                        ?>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-12" style="margin-bottom: 20px;">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Expériences</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade profile-overview active show" id="profile-overview">
                                    <table id='datatable-buttons' class=' table table-striped table-bordered'>
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Libellé</th>
                                                <th>Période</th>
                                                <th>Entreprise</th>
                                                <th>Fichier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            foreach ($all_data_exp as $value) {
                                                //   if($site_name == $value->id_source || $site_name=='ANSD')
                                                //  {
                                            ?>
                                                <tr>
                                                    <td><?php echo $value->_type_exp; ?> &nbsp;&nbsp;</td>
                                                    <td><?php echo $value->libelle; ?></td>
                                                    <td><?php
                                                        if (empty($value->date_debut) && empty($value->date_fin)) {
                                                            echo "Non renseignée";
                                                        } else {
                                                            echo date_parse_en2fr_short($value->date_debut);
                                                            if (!empty($value->date_fin))
                                                                echo '-' . date_parse_en2fr_short($value->date_fin);
                                                        }

                                                        ?></td>
                                                    <td><?php echo $value->entreprise_lieu; ?> </td>
                                                    <td>

                                                        <?php

                                                        if (!empty($value->image)) {
                                                            $image = $value->image;
                                                            $extension = pathinfo($image, PATHINFO_EXTENSION);
                                                            switch ($extension) {
                                                                case "jpg": ?>
                                                                    <img id="myImage" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $value->image); ?>" width="300" height="200">

                                                                <?php break;
                                                                case "jpeg": ?>
                                                                    <img id="myImage" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $value->image); ?>" width="300" height="200">

                                                                <?php break;
                                                                case "png": ?>
                                                                    <img id="myImage" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $value->image); ?>" width="300" height="200">

                                                                <?php break;
                                                                case "docx": ?>
                                                                    <a download="mon_diplome.docx" href="<?php echo base_url('j0kimpl8ldq/experiences/' . $value->image); ?>">Récupérer le diplome </a>

                                                                <?php break;
                                                                case "pdf": ?>
                                                                    <iframe frameborder="0" src="<?php echo base_url('j0kimpl8ldq/experiences/' . $value->image); ?>" width="300" height="200"></iframe>

                                                            <?php
                                                            }
                                                        } 
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }


                                            //  }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>


                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>
                </div>
                <div class="col-12" style="margin-bottom: 20px;">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Diplomes</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade profile-overview active show" id="profile-overview">
                                    <table id='datatable-buttons' class='table table-striped table-bordered'>
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Libelle</th>
                                                <th>Année obtention</th>
                                                <th>Lieu obtention</th>
                                                <th>Fichier</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            foreach ($all_data_diplomes as $value) {
                                                //   if($site_name == $value->id_source || $site_name=='ANSD')
                                                //  {
                                            ?>
                                                <tr>
                                                    <td><?php echo $value->_type_diplome; ?></td>
                                                    <td><?php echo $value->libelle; ?></td>
                                                    <td><?php echo $value->annee_obtention; ?></td>
                                                    <td><?php echo $value->lieu_obtention; ?></td>
                                                    <td>

<?php

if (!empty($value->image)) {
    $image = $value->image;
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    switch ($extension) {
        case "jpg": ?>
            <img id="myImage" src="<?php echo base_url('j0kimpl8ldq/diplomes/' . $value->image); ?>" width="300" height="200">

        <?php break;
        case "jpeg": ?>
            <img id="myImage" src="<?php echo base_url('j0kimpl8ldq/diplomes/' . $value->image); ?>" width="300" height="200">

        <?php break;
        case "png": ?>
            <img id="myImage" src="<?php echo base_url('j0kimpl8ldq/diplomes/' . $value->image); ?>" width="300" height="200">

        <?php break;
        case "docx": ?>
            <a download="mon_diplome.docx" href="<?php echo base_url('j0kimpl8ldq/diplomes/' . $value->image); ?>">Récupérer le diplome </a>

        <?php break;
        case "pdf": ?>
            <iframe frameborder="0" width="300" height="300" src="<?php echo base_url('j0kimpl8ldq/diplomes/' . $value->image); ?>" width="300" height="200"></iframe>

    <?php
    }
} 
?>
</td>
                                                </tr>
                                            <?php
                                            }


                                            //  }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>


                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
</section>

</main>


<script>
    window.onload = function() {
        // Get a reference to the image element
        var img = document.getElementById("myImage");

        // Define the new width and height
        var newWidth = 200; // Change this to the desired width
        var newHeight = 200; // Change this to the desired height

        // Set the new width and height
        img.width = newWidth;
        img.height = newHeight;
    };
</script>
