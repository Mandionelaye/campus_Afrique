<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Campus Afrique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link src="<?php echo base_url(); ?>assets/img/favicon.ico" rel="icon">
  <link src="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>


        <!-- Font Icons -->
        <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/material-design-iconic-font.min.css" rel="stylesheet">
		

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">


    <!-- Main  -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.js"> </script>

    <style>
.sep1 {
   /* Background pattern from Toptal Subtle Patterns */
   background-image: url("assets/img/sep1.png");
   height: 200px;
   border-radius: 15px;

}
.sep2 {
   /* Background pattern from Toptal Subtle Patterns */
   background-image: url("assets/img/sep1.png");
   height: 200px;
   border-radius: 15px;

}
.sep3 {
   /* Background pattern from Toptal Subtle Patterns */
   background-image: url("https://mcdn.wallpapersafari.com/medium/47/58/bu724M.jpg");
   border-radius: 0 0 15px 15px;
   background-repeat: no-repeat;
   background-size: cover;
   height: 200px;
}
.slider_section .slider_container {
  color: #fefefe;
  background-color: #000000;
  padding: 25px;
  border-radius: 0 0 15px 15px;
}
#banniere{
  background-image: url(assets/img/campus.jpg);
  background-repeat: none;
}

.slider_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;

}

.slider_section .img-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 45px;
}

.slider_section .img-box img {
  width: 275px;
}

.slider_section .detail-box {
  padding-left: 5px;
  margin: 75px 0;
}

.slider_section .detail-box h1 {
  font-weight: bold;
  font-size: 3.5rem;
  margin-bottom: 10px;
}

.slider_section .detail-box a {
  display: inline-block;
  padding: 7px 30px;
  background-color: #000080;
  color: #ffffff;
  border: 1px solid #0000FF;
  border-radius: 5px;
  -webkit-transition: all .3s;
  transition: all .3s;
  margin-top: 15px;
  text-transform: uppercase;
}

.slider_section .detail-box a:hover {
  background-color: transparent;
  color: #db4566;
}

.slider_section .carousel_btn-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background-color: #ffffff;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: absolute;
  bottom: -25px;
  left: 5%;
  padding: 7px 10px;
  border-radius: 5px 5px 0 0;
}

.slider_section .carousel_btn-box img {
  margin: 0 10px;
}

.slider_section .carousel_btn-box .carousel-control-prev,
.slider_section .carousel_btn-box .carousel-control-next {
  position: unset;
  height: 25px;
  width: 25px;
  background-repeat: no-repeat;
  opacity: 1;
  background-position: center;
  color: #000000;
  font-size: 14px;
}

#conteneur-page {
  position: relative;
  min-height: 100vh;

}

#enveloppe-contenu {
  padding-bottom: 2.5rem;    /* Hauteur du pied-de-page */
}
#nav-link {
  color:#012970;
}
#pied-de-page {
  bottom: 0;
  width: 100%;
  position: fixed;
  height: 3.5rem; 
  background-color:#012970;
  color:white;           /* Hauteur du pied-de-page */
}
</style>


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

<?php if(!empty($this->session->samay_mbiir))////si la session est vide
	{
 ?>
 <!-- ======= Header ======= -->
 <header class="py-4 header fixed-top">

    
<nav class="header-nav ms-auto navbar navbar-expand-md fixed-top navbar-light bg-light">

 
<div class="d-flex align-items-center justify-content-between" >
  <a href="" style="margin-left:20px;"  class="logo d-flex align-items-center">
    <!-- img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" -->
    <span class="d-none d-lg-block">Campus Afrique</span>
    
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->
 
<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Rechercher" title="Tapez le mot à chercher">
    <button type="submit" title="Rechercher"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">

      <li class="nav-item d-block d-lg-none" >
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <!-- <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul>
    </li> -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['_the_name']; ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>
            <?php 
              echo $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['_the_name'];
              //demba_debug($this->session->can8_g1qsu_30q9o);
              ?></h6>
          <span><?php
              //$id_site 			= $this->session->can8_g1qsu_30q9o['id_site'];
              $list_site_name 	= 	array(
                        '1' =>  'BEE',
                        '2' =>  'BEC',
                        '3' =>  'PPLUS',
                        );
             //echo $this->session->can8_g1qsu_30q9o['profil'].'/'.$list_site_name[$id_site];  ?></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('mon-profil'); ?>">
            <i class="bi bi-person"></i>
            <span>Mon Profil</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        
        <!--li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li-->
        <li>
          <a class="dropdown-item d-flex align-items-center" href="<?php  echo site_url('wethio-thiabi') ?>">
              <i class="bi bi-lock-fill"></i>
              <span>Changer de mot de pass</span>
          </a>
        </li>


        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Documentation?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="<?php  echo site_url('se-deconnecter') ?>">
            <i class="bi bi-box-arrow-right"></i>
            <span>Se deconnecter</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->


</ul>
    </div>
</nav>

</header><!-- End Header -->
<?php }
	else
	{
		?> 
    <!-- ======= Header ======= -->
  <header class="py-4 header fixed-top">

    
<nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">

 
<a style="margin-left:20px" href="<?php echo base_url()  ?>" class="logo d-flex ">
    <!-- <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""> -->
    <span class="">Campus Afrique</span>
  </a>   
<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Rechercher" title="Tapez le mot à chercher">
    <button type="submit" title="Rechercher"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="padding: 10px;">
      <ul class="navbar-nav">       
  
  <!--button class="btn btn-primary" type="button" disabled=""> 
    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> 
    <span class="visually-hidden">Loading...</span> 
  </button-->
  <li class="nav-item  pe-3" >
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?php echo base_url(); ?>">
            <span class="text-primary">Accueil</span>
          </a>
        </li>

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile text-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Connexion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>acceder-a-son-espace">Candidat</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url();?>connexion">Etablissement</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo base_url();?>connexion_resp">Responsable de filier</a></li>
          </ul>
<!-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?php echo base_url(); ?>acceder-a-son-espace" >
  <span class="text-primary">Connexion</span>
</a>End Profile Iamge Icon -->

<!--ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
  <li>
    <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>sign-in">
      <i class="bi bi-person"></i>
      <span>Recruteur</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>acceder-a-son-espace">
      <i class="bi bi-question-circle"></i>
      <span>Candidats</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>
</ul--><!-- End Profile Dropdown Items -->

</li><!-- End Profile Nav -->
  <li class="nav-item  pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?php echo base_url(); ?>creer-son-compte">
            <span class="text-primary">Inscription</span>
          </a>
  </li>

    <li class="nav-item dropdown pe-3">
<!-- 
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <span class="text-primary dropdown-toggle ">Voir +</span>
      </a>End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
      <li>
          <a class="dropdown-item d-flex align-items-center" href="#statistiques">
            <i class="bi bi-question-circle"></i>
            <span>Statistiques</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
      <li>
          <a class="dropdown-item d-flex align-items-center" href="#offres">
            <i class="bi bi-person"></i>
            <span>Offres</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#expiré">
            <i class="bi bi-question-circle"></i>
            <span>Offres qui vont bientôt expirés</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#dépots">
            <i class="bi bi-question-circle"></i>
            <span>Derniers Dépots</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
</ul><!-- End Profile Dropdown Items -->

    </li><!-- End Profile Nav -->
    <li class="nav-item  pe-3">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?php  echo site_url('contacts') ?>">
                <span class="text-primary" >Contacts</span>
              </a>
            </li>


		<?php
	}
 ?>
    </ul>
        </div>
    </nav>

  </header><!-- End Header -->
 
