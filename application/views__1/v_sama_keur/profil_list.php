<?php //show_breadcrumbs($breadcrumbs);   
?>


<!-- Page-Title -->
<?php
if (!empty($rdc2_rights['add'])) {
?>
  <div class='row'>
    <div class='col-sm-12' style='margin-bottom: 30px'>
      <a href="<?php echo site_url('');  ?>">
        <button type='button' id='btn_add' class='btn btn-info'>Nouveau <span class='m-l-5'><i class='fa fa-plus-square'></i></span></button>
      </a>
    </div>
  </div>
<?php
}
?>

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <h2><?php echo $date_one_element['prenom']; ?></h2>
          <h3><?php echo $date_one_element['nom']; ?></h3>
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
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Info</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Paramétres</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer de mot de pass
              </button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade profile-overview active show" id="profile-overview">

              <h5 class="card-title">Détails Profil</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Prénom</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['prenom']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nom</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['nom']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Sexe</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['sexe']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Téléphone</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['telephone']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['email']; ?></div>
              </div>


              <div class="row">
                <div class="col-lg-3 col-md-4 label">Date de naissance</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['date_naiss']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Lieu de naissance</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['lieu_naiss']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Date création</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['date_creation']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Statut</div>
                <div class="col-lg-9 col-md-8"><?php echo show_state_color($date_one_element['etat']); ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Date dernière modification</div>
                <div class="col-lg-9 col-md-8"><?php echo $date_one_element['date_last_modif']; ?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form>
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo de profil</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Prénom</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="company" type="text" class="form-control" id="company" value="<?php echo $date_one_element['prenom']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $date_one_element['nom']; ?>">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="job" type="text" class="form-control" id="Job" value="<?php echo $date_one_element['telephone']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="country" type="text" class="form-control" id="Country" value="<?php echo $date_one_element['email']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Statut</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="address" type="text" class="form-control" id="Address" value="<?php echo $date_one_element['etat']; ?>">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form><!-- End Profile Edit Form -->

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
              <form id="sign_in" method="POST" class="row g-3 needs-validation" action="verif-wethio-thiabi" novalidate> 

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe Actuel</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrer votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Nouveau mot de passe</label>
                      <input type="password" name="new_password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrer un nouveau mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirmation du nouveau mot de passe</label>
                      <input type="password" name="conf_password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrer un nouveau mot de passe!</div>
                    </div>
                    <!--div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div-->
					
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Changer</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"> 
                        <a href="#pages-register.html">Autres méthodes? </a><hr>
                        <a href="<?php echo site_url('bienvenu') ?>" class="text-right" >retour au site web public</a>
                      </p>
                    </div>
                  </form>
            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>
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
        url: '<?php echo site_url('') ?>' + id,
        //type: "GET",
        //dataType: "HTML",
        success: function(data) {
          window.location.replace('');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error adding / update data');
        }
      });
      $('#verticalycentered').modal('hide');

    });


  });
</script>