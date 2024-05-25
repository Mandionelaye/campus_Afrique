

      <section class="section ">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="#" alt="">
                  <span class="d-none d-lg-block">Changez votre mot de passe</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <!--div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Partie administration de la plateforme</h5>
                    <p class="text-center small">Changez votre mot de passe</p>
                  </div-->

                  <!--form class="row g-3 needs-validation" novalidate-->
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
              </div>

              

            </div>
          </div>
        </div>

      </section>

  </main><!-- End #main -->

  