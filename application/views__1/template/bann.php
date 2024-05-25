  
  <div class="" style="margin-top:50px;">
    <section class="slider_section">
      <div class="slider_container" id="banniere">
        <div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
          <div class="carousel-inner"  >
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row" >
                  <div class="col-md-7" style="margin-bottom:50px;">
                    <div class="detail-box" >
                      <h1>
                       Bienvenue sur Campus Afrique
                        
                      </h1>
                      <p>
                      Trouvez vos collaborateurs, managez vos campagnes de recrutement en toute autonomie et simplicité avec nos services.
                      </p>
                      
                      <!--a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a-->
                    </div>
                  </div>
                  <!-- div class="col-md-5 ">
                    <div class="img-box">
                      <img src="<?php echo base_url(); ?>assets/img/concours.png" alt="" style=""/>
                    </div>
                  </div -->
                </div>
              </div>
            </div>
         
          </div>
         
        </div>
      </div>
    </section>
  </div>
 
<section id="statistiques" class="dashboard" style="margin: 30px 14px -30px 14px ">

<div class="row">

  <!-- Sales Card -->
  <div class="col-xxl-4 col-md-4" style="margin-bottom:10px">
    <div class="card info-card sales-card">

      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Entreprises<span>| Cette année</span></h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bx bx-building-house"></i>
          </div>
          <div class="ps-3">
            <h6>
            <?php
            echo $this->db->count_all('sys_almustakhdam');?>
            </h6>
            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

          </div>
        </div>
      </div>

    </div>
  </div><!-- End Sales Card -->

  <!-- Revenue Card -->
  <div class="col-xxl-4 col-md-4" style="margin-bottom:10px">
    <div class="card info-card revenue-card">

      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Offres <span>| Ce mois</span></h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bx bxs-megaphone"></i>
          </div>
          <div class="ps-3">
            <h6>
            <?php
            echo $this->db->count_all('c_offres');?>
            
            </h6>
            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

          </div>
        </div>
      </div>

    </div>
  </div><!-- End Revenue Card -->

  <!-- Customers Card -->
  <div class="col-xxl-4 col-md-4" style="margin-bottom:10px">

    <div class="card info-card customers-card">

      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Chercheurs d'emploi<span>| Aujourd'hui</span></h5>

        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-people"></i>
          </div>
          <div class="ps-3">
            <h6>
            <?php
            echo $this->db->count_all('c_candidats');?>
            </h6>
            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

          </div>
        </div>

      </div>
    </div>

  </div><!-- End Customers Card -->

  <!-- Reports -->
 
</div>

</section>