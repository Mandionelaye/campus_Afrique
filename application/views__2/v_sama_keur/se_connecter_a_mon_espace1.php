
    <div class="container">

      <section class="section register min-vh-10 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container" >
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Gestion des Candidatures </span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body" style="padding: 10px;">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Entrer sur votre espace perso/ Etape 2</h5>
                    <p class="text-center small">Saisissez maintenant votre mot de passe</p>
                  </div>

                  <!--form class="row g-3 needs-validation" novalidate-->
                  <form id="sign_in1" method="POST" class="row g-3 needs-validation" action="v-enter-my-space1" novalidate> 

                    <div class="col-12">
                      <!--label for="yourUsername" class="form-label">MDP</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Entrez votre mdp.</div>
                      </div>
                    </div-->

                      <label for="yourPassword" class="form-label">MDP</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Entrez votre mdp.</div>
                      </div>
                    </div>

                    <!--div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrer votre mot de passe!</div>
                    </div-->

                    <!--div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div-->
					
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                    </div>
                    <div class="col-6">
                      <p class="small mb-0"> 
                        <a href="#pages-register.html">Mot de passe perdu? </a>                    
                      </p>
                    </div>
                    <div class="col-6">
                      <p class="small mb-0"> 
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

    </div>
  </div>