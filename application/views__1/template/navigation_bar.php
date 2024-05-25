<?php
//Recuperation du tableau des roles menus enregistré dans la session
$menu_roles = $this->session->menu_roles;
$smenu_roles = $this->session->smenu_roles;
?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <nav class="smk">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-smk " href="<?php echo site_url('back-office') ?>">
          <i class="bi bi-bank"></i>
          <span>Accueil</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php
      if (isset($menu_roles['offres'])) {
      ?>
        <li class="nav-item">
          <a class="nav-smk " id="offre" onclick="changeStyleoffre()" data-bs-target="#dp-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-clipboard-data active"></i><span>Offres</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <div id="damasonou">
          <ul id="dp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            ///create_sub_menus(données venant de la table sys_sous_menus,url_venant_de_route.php,texte affiché, clase css
            create_sub_menus(@$smenu_roles['liste-offres']['d_read'], 'offre-ajouter', 'Ajouter', 'bi bi-circle-fill');
            create_sub_menus(@$smenu_roles['liste-offres']['d_read'], 'liste-offres', 'Toutes', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['liste-offres']['d_read'], 'liste-offres', 'En cours', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['liste-offres']['d_read'], 'liste-offres', 'Cloturés', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['collectes-bec-saisie']['d_read'], 'saisie-produit-entreprise', '+ Saisie produit/entreprise', 'bi bi-circle');
            ?>
          </ul>
        </div>
         </li><!-- End collectes Nav -->
      <?php
      }
      ?>




      <?php
      if (isset($menu_roles['candidats'])) {
      ?>
        <li class="nav-item">
          <a class="nav-smk collapsed" id="candidats" onclick="changeStylecandidats()" data-bs-target="#dp-nav-candidats" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people-fill"></i><span>Candidats</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="dp-nav-candidats" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            ///create_sub_menus(données venant de la table sys_sous_menus,url_venant_de_route.php,texte affiché, clase css
            create_sub_menus(@$smenu_roles['liste-offres']['d_read'], 'liste-candidat', 'Candidats', 'bi bi-circle');
            ?>
          </ul>
        </li><!-- End collectes Nav -->
      <?php
      }
      ?>




      <?php
      if (isset($menu_roles['candidatures'])) {
      ?>
        <li class="nav-item">
          <a class="nav-smk collapsed" id="candidatures" onclick="changeStylecandidatures()" data-bs-target="#dp-nav-candidatures" data-bs-toggle="collapse" href="#">
            <i class="bi bi-palette2"></i><span>Candidatures</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="dp-nav-candidatures" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <?php
            ///create_sub_menus(données venant de la table,url_venant_de_route.php,
            // create_sub_menus(@$smenu_roles['liste-offres']['d_read'],'liste-offres','Toutes', 'bi bi-circle');
            // create_sub_menus(@$smenu_roles['liste-offres']['d_read'],'liste-offres','Actuelles', 'bi bi-circle');

            //create_sub_menus(@$smenu_roles['liste-offres']['d_read'],'liste-candidatures','Toutes', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['liste-offres']['d_read'], 'liste-candidatures', 'Actuelles', 'bi bi-circle');
            ?>
          </ul>
        </li><!-- End collectes Nav -->
      <?php
      }
      ?>



      <?php
      if (isset($menu_roles['params'])) {
      ?>
        <li class="nav-item">
          <a class="nav-smk collapsed" id="params" onclick="changeStyleparams()" data-bs-target="#params-nav" data-bs-toggle="collapse" href="#">
            <!-- remove the collapsed-->
            <i class="bi bi-tools"></i><span>Paramétres</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="params-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <!-- add after --nav-content collapse show-->
            <?php


            ///create_sub_menus(données venant de la table sys_sous_menus, url_venant_de_route.php, texte affiché, clase css)
            create_sub_menus(@$smenu_roles['params']['d_read'], 'params-liste-pays', 'Liste des pays', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['params']['d_read'], 'params-liste-pieces', 'Liste des pieces', 'bi bi-circle');

            create_sub_menus(@$smenu_roles['params']['d_read'], 'params-liste-diplomes', 'Liste des diplomes', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['params']['d_read'], 'params-liste-localites', 'Liste des localites', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['params']['d_read'], 'params-liste-langues', 'Liste des langues', 'bi bi-circle');

            create_sub_menus(@$smenu_roles['params']['d_read'], 'params-liste-lieux', 'Liste des lieux', 'bi bi-circle');

            create_sub_menus(@$smenu_roles['params']['d_read'], 'params-liste-experiences', 'Liste experiences', 'bi bi-circle');

            /*create_sub_menus(@$smenu_roles['par-list-sect-entreprises']['d_read'],'params-liste-entreprises-secteur','Secteurs entreprises', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['par-liste-entreprises']['d_read'],'params-liste-des-entreprises','Entreprise', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['par-type-unite']       ['d_read'],'params-liste-des-unites','Type unités', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['liste-pays']           ['d_read'],'params-liste-pays','Liste pays', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['liste-annees']         ['d_read'],'params-liste-des-annees','Liste années', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['par-mois']             ['d_read'],'params-liste-des-mois','Liste mois', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['par-collectes']        ['d_read'],'params-collectes','Liste collectes', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['par-collectes']        ['d_read'],'C_z_historique','Historique accès', 'bi bi-circle');
              create_sub_menus(@$smenu_roles['par-collectes']        ['d_read'],'C_z_historique/index_err','Erreurs connexion', 'bi bi-circle');
              */
            ?>
          </ul>
        </li><!-- End Paramétres Nav -->
      <?php
      }
      ?>

      <?php
      if (isset($menu_roles['securite'])) {
      ?>
        <li class="nav-item">
          <a class="nav-smk collapsed" id="securite" onclick="changeStylesecurite()" data-bs-target="#syst-nav" data-bs-toggle="collapse" href="#">
            <i class="fa fa-unlock-alt"></i><span>Système</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="syst-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <!--li>
            <a href="<?php echo site_url('liste-utilisateurs'); ?> ">
              <i class="bi bi-circle"></i><span>Utilisateurs</span>
            </a>
          </li-->
            <?php

            /*
          if(isset($smenu_roles['list-users']['d_read']))
          {
          ?>
            <li>
              <a href="<?php echo site_url('liste-utilisateurs'); ?> ">
              <i class="bi bi-circle"></i><span>Utilisateurs</span>
              </a>
            </li>
          <?php 
          }
        */

            create_sub_menus(@$smenu_roles['list-users']['d_read'], 'liste-utilisateurs', 'Utilisateurs', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['profils']['d_read'], 'liste-profils', 'Profils', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['menus']['d_read'], 'params-liste-menu', 'Menus', 'bi bi-circle');
            create_sub_menus(@$smenu_roles['smenus']['d_read'], 'params-liste-smenu', 'Sous-menus', 'bi bi-circle');

            ?>
            <!--li>
            <a href="<?php echo site_url('liste-profils'); ?>">
              <i class="bi bi-circle"></i><span>Profils</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('params-liste-menu'); ?>">
              <i class="bi bi-circle"></i><span>Menus</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('params-liste-smenu'); ?>">
              <i class="bi bi-circle"></i><span>Sous-menus</span>
            </a>
          </li-->


          </ul>
        </li><!-- End Système Nav -->
      <?php
      }
      ?>


    </ul>
  </nav>
</aside><!-- End Sidebar-->
<style>
  .sidebar-nav .nav-smk {
    display: flex;
    align-items: center;
    font-size: 15px;
    font-weight: 600;

    background: #f6f9ff;
    padding: 10px 15px;
    border-radius: 4px;
  }

  .smk ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  .smk li {
    display: inline;
    margin-right: 20px;
  }

  .smk a {
    text-decoration: none;
    padding: 5px 10px;
  }

  /* Style for active link */
  .smk a.active {
    background-color: #012970;
    /* Change this to your desired background color */
    color: #fff;
    /* Change this to your desired text color */
  }

  
  .nav-smk {
    display: block;
    padding: 0.5rem 1rem;
    text-decoration: none;

  }

  .sidebar-nav .nav-smk i {
    font-size: 16px;
    margin-right: 10px;
  }
</style>
<script>
  // Get the current page's URL
  var currentURL = window.location.href;

  // Get all the links in the navbar
  var links = document.querySelectorAll('nav a');

  // Loop through the links and add the "active" class to the current page's link
  for (var i = 0; i < links.length; i++) {
    if (links[i].href === currentURL) {
      links[i].classList.add('active');
    }
    
  }

</script>
<script>

    var offre = document.getElementById("offre");
    var candidats = document.getElementById("candidats");
    var candidatures = document.getElementById("candidatures");
    var params = document.getElementById("params");
    var securite = document.getElementById("securite");

    function changeStyleoffre(){
        document.getElementById("candidats").classList.remove("active");
        document.getElementById("candidatures").classList.remove("active");
        document.getElementById("params").classList.remove("active");
        document.getElementById("securite").classList.remove("active");

        offre.className += " active ";


    }
        function changeStylecandidats(){   
      document.getElementById("offre").classList.remove("active");
      document.getElementById("candidatures").classList.remove("active");
      document.getElementById("params").classList.remove("active");
      document.getElementById("securite").classList.remove("active");

      candidats.className += " active ";
    }
    function changeStylecandidatures(){
      document.getElementById("candidats").classList.remove("active");
      document.getElementById("offre").classList.remove("active");
      document.getElementById("params").classList.remove("active");
      document.getElementById("securite").classList.remove("active");

      candidatures.className += " active ";
    }
    function changeStyleparams(){
      document.getElementById("candidats").classList.remove("active");
        document.getElementById("candidatures").classList.remove("active");
        document.getElementById("offre").classList.remove("active");
        document.getElementById("securite").classList.remove("active");

      params.className += " active ";
    }
    function changeStylesecurite(){
      document.getElementById("candidats").classList.remove("active");
        document.getElementById("candidatures").classList.remove("active");
        document.getElementById("offre").classList.remove("active");
        document.getElementById("params").classList.remove("active");

      securite.className += " active ";
    }
    </script>
      
      


<main id="main" class="main">