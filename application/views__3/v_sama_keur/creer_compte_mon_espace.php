              
 <div class="row justify-content-center" style=" margin-top:40px;">
            <div class="col-md-8 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

<div class="card-body" style="padding: 12px;">

  <div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
    <p class="text-center small">Entrez vos données personnelles pour créer un compte</p>
  </div>

  <form id="sign_in" method="POST" class="row g-3 needs-validation" action="creer-son-compte" novalidate> 

  <div class="col-6">
    <label for="the_surname" class="form-label">Votre prénom</label>
    <input type="text" name="the_surname" class="form-control" id="the_surname" value="<?php echo set_value('the_surname'); ?>" >
    <div class="invalid-feedback">SVP, saisissez votre prénom!</div>

    <?php echo form_error('the_surname', '<div class="error">', '</div>'); ?>

  </div>

    <div class="col-6">
      <label for="the_name" class="form-label">Votre nom</label>
      <input type="text" name="the_name" class="form-control" id="the_name" value="<?php echo set_value('the_name'); ?>"  >
      <div class="invalid-feedback">SVP, saisissez votre nom!</div>
    <?php echo form_error('the_name', '<div class="error">', '</div>'); ?>
    </div>

    <div class="col-6">
      <label for="the_name" class="form-label">Sexe</label>
      <?php

        $options = array(
								''	=> 'Choisir...',
								'Masc'	=> 'Masculin',
								'Fem'	  => 'Féminin',
							);
							$val_var = !empty($this->input->post('the_sex')) ? $this->input->post('the_sex') : '';
							echo form_dropdown('the_sex', $options, $val_var, " class='form-select'");
							
							echo form_error('the_sex', '<div class="error">', '</div>'); ?>
    </div>

    <div class="col-6">
      <label for="email" class="form-label">Votre email</label>
      <input type="email" name="email" class="form-control" id="the_email" required="">
      <div class="invalid-feedback">SVP, saisissez votre email!</div>
      <?php echo form_error('email', '<div class="error">', '</div>'); ?>

    </div>

    <div class="col-6">
      <label for="password" class="form-label">Mot de pass</label>
      <input type="password" name="password" class="form-control" id="password" required="">
      <div class="invalid-feedback">SVP, saisissez votre mot de passe!</div>
      <?php echo form_error('password', '<div class="error">', '</div>'); ?>

    </div>

    <div class="col-6">
      <label for="conf_password" class="form-label">Confirmation du Mot de pass</label>
      <input type="password" name="conf_password" class="form-control" id="conf_password" required="">
      <div class="invalid-feedback">SVP, confirmer le mot de passe saisie en haut!</div>
      <?php echo form_error('conf_password', '<div class="error">', '</div>'); ?>

    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required="">
        <label class="form-check-label" for="acceptTerms">J'accepte les <a href="#">termes et conditions</a></label>
        <div class="invalid-feedback">Vous devez accepter avant de pouvoir vous enregistrer.</div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Créer un compte</button>
    </div>
    <div class="col-12">
      <p class="small mb-0">Disposez-vous déja d'un compte ?  si oui ->> <a href="<?php echo site_url('acceder-a-son-espace');  ?>">Se connecter</a></p>
    </div>
  </form>

</div>
</div>              
</div>
</div>
      
