<?php show_breadcrumbs($breadcrumbs);   ?>
<section class="section profile">
      <div class="row">
        <div class="col-xl-5">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/logo_dil.png" alt="Profile" class="rounded-circle">
              <h2><?php echo $date_one_element['libelle'] ?></h2>
              <p>&nbsp;</p>
<?php

  //var_dump($date_one_element['date_cloture']) ;
  $date1 = date('Y-m-d');
  $date2 = $date_one_element['date_cloture'];

  $nb_days = diff_n_jour($date1,$date2);
 /// demba_debug($nb_days);
  //echo "Le nombre de jours entre $date1 et $date2 est : $diff_en_jours jours.";

?>
              <?php
              if($nb_days > 0)
              {
                ?>
                <h3>Expire dans <?php echo $nb_days; ?> jours</h3>
                <?php
              }

              ?>
              <a href="<?php echo site_url('candidat-liste-des-offres'); ?>" >Retourner à la liste des offres</a>
              <p>&nbsp;</p>

              <?php 

              //si l'offre est expiré plus de postuler
              if($nb_days<0)
              {
                ?>
                  <button type="button" class="btn btn-danger">Offre expirée depuis <?php echo abs($nb_days); ?> jours</button>
                <?php
              }
              else
              {
                if(empty($this->session->samay_mbiir))
                {
                ?>
                <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                  <h4 class="alert-heading">A votre attention!</h4>
                  <p style="text-align:justify">Vous devez obligatoirement disposer d'un compte ensuite vous connecter avant de pouvoir postuler aux offres de la plateforme.</p>
                  <hr>
                    <p class="mb-0">&nbsp;</p>
                    <a href="<?php  echo site_url('creer-son-compte') ?>" style='float:left'>Créer un compte</a> 
                    <a href="<?php  echo site_url('acceder-a-son-espace') ?>" style='float:right'>Se connecter</a>

                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 

                }
                else
                {
                  ?><a href='<?php echo site_url('verifier-depot-candidature/'.$code_elt); ?>'><button type="button" class="btn btn-secondary">Déposer ma candidature</button></a><?php 
                }
              }
              //demba_debug($this->session->samay_mbiir);

              ?>


            </div>
          </div>

        </div>

        <div class="col-xl-7">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Détails sur l'offre de formation</button>
                </li>



              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade profile-overview active show" id="profile-overview">
                  <h5 class="card-title">Description</h5>
                  <p class="small fst-italic">
                  <?php echo $date_one_element['description'] ?>
                  </p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label ">Date lancement</div>
                    <div class="col-lg-7 col-md-8"><?php echo $date_one_element['date_publication'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Date clôture</div>
                    <div class="col-lg-7 col-md-8"><?php echo $date_one_element['date_cloture'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Conditions à remplir</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Débouchés</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Durée de la formation</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Modalité de la formation</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Email de contact</div>
                    <div class="col-lg-7 col-md-8">perfakademy@gmail.com</div>
                  </div>

                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
            </main><?php show_breadcrumbs($breadcrumbs);   ?>
<section class="section profile">
      <div class="row">
        <div class="col-xl-5">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/logo_dil.png" alt="Profile" class="rounded-circle">
              <h2><?php echo $date_one_element['libelle'] ?></h2>
              <p>&nbsp;</p>
<?php

  //var_dump($date_one_element['date_cloture']) ;
  $date1 = date('Y-m-d');
  $date2 = $date_one_element['date_cloture'];

  $nb_days = diff_n_jour($date1,$date2);
 /// demba_debug($nb_days);
  //echo "Le nombre de jours entre $date1 et $date2 est : $diff_en_jours jours.";

?>
              <?php
              if($nb_days > 0)
              {
                ?>
                <h3>Expire dans <?php echo $nb_days; ?> jours</h3>
                <?php
              }

              ?>
              <a href="<?php echo site_url('candidat-liste-des-offres'); ?>" >Retourner à la liste des offres</a>
              <p>&nbsp;</p>

              <?php 

              //si l'offre est expiré plus de postuler
              if($nb_days<0)
              {
                ?>
                  <button type="button" class="btn btn-danger">Offre expirée depuis <?php echo abs($nb_days); ?> jours</button>
                <?php
              }
              else
              {
                if(empty($this->session->samay_mbiir))
                {
                ?>
                <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                  <h4 class="alert-heading">A votre attention!</h4>
                  <p style="text-align:justify">Vous devez obligatoirement disposer d'un compte ensuite vous connecter avant de pouvoir postuler aux offres de la plateforme.</p>
                  <hr>
                    <p class="mb-0">&nbsp;</p>
                    <a href="<?php  echo site_url('creer-son-compte') ?>" style='float:left'>Créer un compte</a> 
                    <a href="<?php  echo site_url('acceder-a-son-espace') ?>" style='float:right'>Se connecter</a>

                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 

                }
                else
                {
                  ?><a href='<?php echo site_url('verifier-depot-candidature/'.$code_elt); ?>'><button type="button" class="btn btn-secondary">Déposer ma candidature</button></a><?php 
                }
              }
              //demba_debug($this->session->samay_mbiir);

              ?>


            </div>
          </div>

        </div>

        <div class="col-xl-7">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Détails sur l'offre de formation</button>
                </li>



              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade profile-overview active show" id="profile-overview">
                  <h5 class="card-title">Description</h5>
                  <p class="small fst-italic">
                  <?php echo $date_one_element['description'] ?>
                  </p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label ">Date lancement</div>
                    <div class="col-lg-7 col-md-8"><?php echo $date_one_element['date_publication'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Date clôture</div>
                    <div class="col-lg-7 col-md-8"><?php echo $date_one_element['date_cloture'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Conditions à remplir</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Débouchés</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Durée de la formation</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Modalité de la formation</div>
                    <div class="col-lg-7 col-md-8">...</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Email de contact</div>
                    <div class="col-lg-7 col-md-8">perfakademy@gmail.com</div>
                  </div>

                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
            </main>