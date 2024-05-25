
<div class="row justify-content-center" style=" margin-top:40px;">
            <div class="col-lg-4 col-md-8 d-flex flex-column align-items-center justify-content-center">

              <!--div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="#" alt="">
                  <span class="d-none d-lg-block">Gestion des Candidatures </span>
                </a>
              </div--><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body" style="padding: 10px;">

                  <div class="pt-4 pb-2" >
                    <h5 class="card-title text-center pb-0 fs-4">Partie administration pour les établissements</h5>
                    <p class="text-center small">Saisissez votre login & mot de passe</p>
                  </div>

                  <!--form class="row g-3 needs-validation" novalidate-->
                  <form id="sign_in" method="POST" class="row g-3 needs-validation" action="<?php echo site_url('verif-connexion-ecole'); ?>" novalidate> 

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Login</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Entrez votre login.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrer votre mot de passe!</div>
                    </div>

                    <!--div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div-->
					
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"> 
                        <a href="#pages-register.html">Mot de passe perdu? </a><hr>
                        <a href="<?php echo site_url('bienvenu') ?>" class="text-right" >retour au site web public</a>
                      </p>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        
 