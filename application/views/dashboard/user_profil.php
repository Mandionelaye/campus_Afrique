<?php //show_breadcrumbs($breadcrumbs);   
?>


<!-- Page-Title -->
<?php
if (!empty($rdc2_rights['add'])) {
?>
<div class='row'>
    <div class='col-sm-12' style='margin-bottom: 30px'>
        <a href="<?php echo site_url('');  ?>">
            <button type='button' id='btn_add' class='btn btn-info'>Nouveau <span class='m-l-5'><i
                        class='fa fa-plus-square'></i></span></button>
        </a>
    </div>
</div>
<?php
}
?>

<section class="section profile mb-5">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <?php if($this->session->can8_g1qsu_30q9o['profil'] == 'Ecole'){ ?>
                    <img src="<?=$date_one_element['logo']?'j0kimpl8ldq/logo/'.$date_one_element['logo']:'assets/img/profile-img.jpg'?>"
                        alt="Profile" class="rounded-circle">
                    <h3><?php echo $date_one_element['libelle']; ?></h3>


                    <?php }elseif($this->session->can8_g1qsu_30q9o['profil'] == 'responsable_filiere'){ ?>

                    <img src="<?=$date_one_element['img_profil']?'j0kimpl8ldq/logo/'.$date_one_element['img_profil']:'assets/img/profile-img.jpg'?>"
                        alt="Profile" class="rounded-circle">
                    <h2><?php echo $date_one_element['prenom']; ?></h2>
                    <h3><?php echo $date_one_element['nom']; ?></h3>
                    <?php }else{ ?>
                    <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <h2><?php echo $date_one_element['prenom']; ?></h2>
                    <h3><?php echo $date_one_element['nom']; ?></h3>
                    <?php } ?>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Details</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Info</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-settings">Paramétres</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-change-password">Changer de mot de pass
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Détails Profil</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Type de profil</div>
                                <div class="col-lg-9 col-md-8"><?php echo $this->session->can8_g1qsu_30q9o['profil'] ?>
                                </div>
                            </div>

                            <?php if($this->session->can8_g1qsu_30q9o['profil'] != 'Ecole'){ ?>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Prénom</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['prenom']; ?></div>
                            </div>
                            <?php }else{ ?>
                            <!-- pour ecole -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Libellé</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['libelle']; ?></div>
                            </div>
                            <?php } ?>

                            <?php if($this->session->can8_g1qsu_30q9o['profil'] != 'Ecole'){ ?>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Nom</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['nom']; ?></div>
                            </div>
                            <?php }else{ ?>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Adresse</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['adresse']; ?></div>
                            </div>
                            <?php } ?>

                            <?php if($this->session->can8_g1qsu_30q9o['profil'] != 'Ecole'){ ?>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Téléphone</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo $profil == 'responsable_filiere'?  $date_one_element['numero'] : $date_one_element['telephone'] ?>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <!-- pour ecole -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Téléphone</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['numero']; ?></div>
                            </div>
                            <?php } ?>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['email']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Date création</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['date_creation']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Statut</div>
                                <div class="col-lg-9 col-md-8">
                                    <?php echo show_state_user_color($date_one_element['etat']); ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Date dernière modification</div>
                                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['date_last_modif']; ?></div>
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <?php if($this->session->can8_g1qsu_30q9o['profil'] == 'Ecole'){ ?>
                            <!-- Pour ecole -->
                            <form method="post" action="<?php echo site_url('edit_ecole'); ?>" novalidate method="post"
                                enctype="multipart/form-data" novalidate="novalidate">
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo de
                                        profil</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="<?=$date_one_element['logo']?'j0kimpl8ldq/logo/'.$date_one_element['logo']:'assets/img/profile-img.jpg'?>"
                                        id="img"  alt="Profile">
                                        <div class="pt-2">
                                            <a class="btn btn-primary btn-sm" id="uploadBtn"><i
                                                    class="bi bi-upload"></i>
                                            </a>
                                            <input type="file" id="loge" accept='image/*' name="logo" hidden />
                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                                    class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Libellé</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="libelle" type="text" class="form-control" id="company"
                                            value="<?php echo $date_one_element['libelle']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="adresse" type="text" class="form-control" id="fullName"
                                            value="<?php echo $date_one_element['adresse']; ?>">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="numero" type="number" class="form-control" id="Job"
                                            value="<?php echo $date_one_element['numero']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email"
                                            value="<?php echo $date_one_element['email']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Lien du site</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="lien_site" type="text" class="form-control" id="fullName"
                                            value="<?php echo $date_one_element['lien_site']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Description</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="description" class="form-control" id="fullName"
                                            rows="3"><?php echo $date_one_element['description']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Statut</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="etat" type="text" class="form-control" id="etat"
                                            value="<?php echo $date_one_element['etat']; ?>">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                            <!-- pour le responsable de filier -->
                            <?php }elseif($this->session->can8_g1qsu_30q9o['profil'] == 'responsable_filiere'){ ?>
                            <form method="post" action="<?php echo site_url('edit_respon'); ?>" novalidate method="post"
                                enctype="multipart/form-data" novalidate="novalidate">
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo de
                                        profil</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="<?=$date_one_element['img_profil']?'j0kimpl8ldq/logo/'.$date_one_element['img_profil']:'assets/img/profile-img.jpg'?>"
                                          id="img"  alt="Profile">
                                        <div class="pt-2">
                                            <a class="btn btn-primary btn-sm" id="uploadBtn"><i
                                                    class="bi bi-upload"></i>
                                            </a>
                                            <input type="file" id="loge" accept='image/*' name="logo" hidden />
                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                                    class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="nom" type="text" class="form-control" id="company"
                                            value="<?php echo $date_one_element['nom']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Prénom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="prenom" type="text" class="form-control" id="company"
                                            value="<?php echo $date_one_element['prenom']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="adresse" type="text" class="form-control" id="fullName"
                                            value="<?php echo $date_one_element['adresse']; ?>">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="numero" type="number" class="form-control" id="Job"
                                            value="<?php echo $date_one_element['numero']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email"
                                            value="<?php echo $date_one_element['email']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Sex</label>
                                    <div class="col-md-8 col-lg-9">
                                        <?php
                                            $options = array(
                                                ''	=> 'Choisir...',
                                                'M'	=> 'Masculin',
                                                'F'	=> 'Féminin',
                                            );

                                            $val_var = !empty($this->input->post('sex')) ? $this->input->post('sex') : '';
                                            echo form_dropdown('sex', $options, $date_one_element['sex'], " class='form-select'");

                                            ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Observation</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="observation" class="form-control" id="fullName"
                                            rows="3"><?php echo $date_one_element['observation']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Statut</label>
                                    <div class="col-md-8 col-lg-9">
                                        <?php
                                            $options = array(
                                                ''	=> 'Choisir...',
                                                '1'	=> 'Actif',
                                                '0'	=> 'Inactif',
                                            );

                                            $val_var = !empty($this->input->post('etat')) ? $this->input->post('etat') : '';
                                            echo form_dropdown('etat', $options,  $date_one_element['etat'], " class='form-select'");
                                            ?>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form><!-- End Profile Edit Form -->
                            <?php }else { ?>
                            <form>
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo de
                                        profil</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="assets/img/profile-img.jpg" alt="Profile">
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-primary btn-sm"
                                                title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                                    class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Prénom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="company" type="text" class="form-control" id="company"
                                            value="<?php echo $date_one_element['prenom']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fullName" type="text" class="form-control" id="fullName"
                                            value="<?php echo $date_one_element['nom']; ?>">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="job" type="text" class="form-control" id="Job"
                                            value="<?php echo $date_one_element['telephone']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="country" type="text" class="form-control" id="Country"
                                            value="<?php echo $date_one_element['email']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Statut</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="address" type="text" class="form-control" id="Address"
                                            value="<?php echo $date_one_element['etat']; ?>">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form><!-- End Profile Edit Form -->
                            <?php } ?>
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-settings">
                            &nbsp;

                            <!-- Settings Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Notifications</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                            <label class="form-check-label" for="changesMade">
                                                En cas de nouvelle offre
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                            <label class="form-check-label" for="newProducts">
                                                En cas d'acceptation
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form><!-- End settings Form -->
                            &nbsp;
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <!-- Ecole -->
                            <?php if($this->session->can8_g1qsu_30q9o['profil'] == 'Ecole'){ ?>
                            <form action="<?php echo site_url('modif_ecole_mdp'); ?>" novalidate
                                method="post" enctype="multipart/form-data" novalidate="novalidate">
                                <!-- Responsable -->
                                <?php }elseif($this->session->can8_g1qsu_30q9o['profil'] == 'responsable_filiere'){ ?>
                                <form  action="<?php echo site_url('edit_resp_mdp'); ?>" novalidate
                                    method="post" enctype="multipart/form-data" novalidate="novalidate">
                                    <!-- sup -->
                                    <?php }else { ?>
                                    <form>
                                        <?php } ?>
                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de
                                                pass
                                                actuel</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nouveau
                                                mot de
                                                pass</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                pattern="(?=.*\d).{8,}" title="Le mot de passe doit contenir au moins un chiffre et avoir au moins 8 caractères" 
                                                required  id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Confirmation du
                                                nouveau mot de </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword" required>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->
                                    <?php if($this->session->flashdata("error")) {?>
                                        <div class="alert alert-danger mt-3" role="alert">
                                            mots de passe incorrecte
                                        </div>
                                        <?php } ?>
                                    
                                        <?php if($this->session->flashdata("success")) {?>
                                        <div class="alert alert-success mt-3" role="alert">
                                             mots de passe modifier
                                        </div>
                                        <?php } ?>
                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
</main>

<script type="text/javascript">
    function getImageFromInput(inputSelector, imgSelector) {
    var input = $(inputSelector)[0];
  
    if (input.files && input.files[0]) {
        var reader = new FileReader(); // Création d'un objet FileReader
        reader.onload = function (e) {
            var imageSrc = e.target.result; // Obtention de l'URL de l'image
            // var image = imageSrc;
            $(imgSelector).attr('src', imageSrc);
            console.log("Image récupérée :", imageSrc);
            
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function() {

    $(document).on("click", ".btn_delete", function() {
        var passedID = $(this).attr('id');
        $(".modal-body .hiddenid ").val(passedID);
    });

    $("#uploadBtn").click(function() {
        $("#loge").click();
    });
    $('#loge').change(function () {
        getImageFromInput('#loge','#img');
    });
    $(".btn-primary").click(function() {
        var id = $(".hiddenid").val();

        $.ajax({
            url: '<?php echo site_url('') ?>' + id,
            //type: "GET",
            //dataType: "HTML",
            success: function(data) {
                window.location.replace('');
            },
            error: function(jqXHR, textStatus, errorThrown) {

            }
        });
        $('#verticalycentered').modal('hide');

    });


});
</script>