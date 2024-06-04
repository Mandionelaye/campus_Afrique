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
        <a class="nav-smk" href="<?php echo site_url('mon-espace') ?>">
          <i class="bi bi-bank"></i>
          <span>Accueil</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item"><a class="nav-smk" href="<?php echo site_url('liste-des-pieces') ?>"><i class="bi bi-files"></i><span>Pièces</span></a></li>
      <li class="nav-item"><a class="nav-smk" href="<?php echo site_url('liste-des-diplomes') ?>"><i class="bi bi-book-half"></i><span>Diplômes & bulletin</span></a></li>
      <li class="nav-item"><a class="nav-smk" href="<?php echo site_url('liste-des-experiences') ?>"><i class="bi bi-file-earmark-ruled"></i><span>Expériences</span></a></li>
      <li class="nav-item"><a class="nav-smk" href="<?php echo site_url('liste-des-autre-piece') ?>"><i class="bi bi-book-half"></i><span>Autre Pièces</span></a></li>

      <li class="nav-item"><a class="nav-smk" href="<?php echo site_url('liste-des-langues') ?>"><i class="bi bi-speaker"></i><span>Langues</span></a></li>
      <li class="nav-item"> <a class="nav-smk" href="<?php echo site_url('liste-des-candidatures') ?>"><i class="bi bi-bag-check-fill"></i><span>Mes Candidatures</span></a></li>

      <li class="nav-item"> <a class=""><span>&nbsp; &nbsp;
            <hr>
          </span></a></li>
      <li class="nav-item"> <a class="nav-smk" href="<?php echo site_url('candidat-liste-des-offres') ?>"><i class="bi bi-list-stars"></i><span>Liste des offres</span></a></li>



    </ul>
  </nav>
</aside><!-- End Sidebar-->
<style>
  .sidebar-nav .nav-smk {
    display: flex;
    align-items: center;
    font-size: 15px;
    font-weight: 600;
    color: #4154f1;
    transition: 0.3;
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
    color: #4154f1;
    padding: 5px 10px;
  }

  /* Style for active link */
  .smk a.active {

    border: none;
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
        background: #283c86;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #45a247, #283c86);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #45a247, #283c86);
    /* background-color: #8ed8e5; */
    /* Change this to your desired background color */
    color: #fff;
    /* Change this to your desired text color */
  }

  .nav-smk {
    display: block;
    padding: 0.5rem 1rem;
    color: #4154f1;
    text-decoration: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;

  }

  .sidebar-nav .nav-smk i {
    font-size: 16px;
    margin-right: 10px;
    color: #4154f1;
  }
</style>
<script>
  ///ACTIVEZ LA PAGE Courrante dans le menu a gauche
  // Get the current page's URL
  var currentURL = window.location.href;

  // Get all the links in the navbar
  var links = document.querySelectorAll('nav a');

  // Loop through the links and add the "active" class to the current page's link
  for (var i = 0; i < links.length; i++) 
  {
    if (links[i].href === currentURL) 
    {
      links[i].classList.add('active');
    }
  }
</script>

<main id="main" class="main">