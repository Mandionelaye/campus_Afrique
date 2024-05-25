<section class="section dashboard">


 
  <div class="row">




    <!-- Reports -->

  </div>

  <div class="row">


    <!-- Left side columns -->
    <div class="col-lg-8">

      <div class="row">
        <div class="row">
          <!-- Revenue Card -->
          <div class="col-6" style="margin-bottom:10px">
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
                <h5 class="card-title">Mes candidatures en cours <!--span>| Ce mois</span--></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bx bxs-megaphone"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      echo $this->db->count_all('c_offres'); ?>

                    </h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-6" style="margin-bottom:10px">

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
                <h5 class="card-title">Mes candidatures rejetées<!--span>| Cette semaine</span--></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      echo $this->db->count_all('c_candidats'); ?>
                    </h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                  <li><a class="dropdown-item" href="#">Ce mois</a></li>
                  <li><a class="dropdown-item" href="#">Cette année</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title"><a href='<?php echo site_url("visualiser-toutes-les-offres") ?>'>liste de mes candidatures</a></h5>

                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                  <div class="dataTable-top">
                    <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                          <option value="5">5</option>
                          <option value="10" selected="">10</option>
                          <option value="15">15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                        </select> entries per page</label></div>
                    <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
                  </div>
                  <div class="dataTable-container">
                    <table class="table table-borderless datatable dataTable-table">
                      <thead>
                        <tr>
                          <th scope="col" data-sortable=""><a href="#" class="dataTable-sorter">Libellé</a></th>
                          <th scope="col" data-sortable=""><a href="#" class="dataTable-sorter">Date dernière modif</a></th>
                          <th scope="col" data-sortable=""><a href="#" class="dataTable-sorter">Date clôture</a></th>
                          <th scope="col" data-sortable=""><a href="#" class="dataTable-sorter">Actions</a></th>

                        </tr>
                      </thead>
                      <tbody>
                        <!--tr><th scope="row"><a href="#">#2457</a></th><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td><span class="badge bg-success">Approved</span></td></tr><tr><th scope="row"><a href="#">#2147</a></th><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td><span class="badge bg-warning">Pending</span></td></tr>
<tr><th scope="row"><a href="#">#2049</a></th><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$147</td><td><span class="badge bg-success">Approved</span></td></tr>
<tr><th scope="row"><a href="#">#2644</a></th><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td><span class="badge bg-danger">Rejected</span></td></tr><tr><th scope="row"><a href="#">#2644</a></th><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td><span class="badge bg-success">Approved</span>
</td></tr-->

                        <?php
                        foreach ($all_offres as $one_row) {
                        ?><tr>
                            <!--th scope="row"><a href="#"><?php //echo $one_row->id; 
                                                            ?></a></th-->
                            <td><?php echo $one_row->_offre; ?></td>
                            <td><?php echo $one_row->dlm; ?></td>
                            <td><span class="badge bg-success"><?php echo $one_row->dc; ?></span></td>
                            <td></td>
                          </tr><?php
                              }
                                ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="dataTable-bottom">
                    <div class="dataTable-info">Affichage de 1 à 5 sur 5 lignes</div>
                    <nav class="dataTable-pagination">
                      <ul class="dataTable-pagination-list"></ul>
                    </nav>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End Recent Sales -->

        </div>


      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4" style="padding: 0px 20px 20px 20px;">

      <div class="row">
        <!-- News & Updates Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filtrer</h6>
              </li>

              <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
              <li><a class="dropdown-item" href="#">Ce mois</a></li>
              <li><a class="dropdown-item" href="#">Cette année</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Derniers dépots sur la plateforme <span>| Aujourd'hui</span></h5>

            <div class="news">
              <div class="post-item clearfix">
                <img src="assets/img/news-1.jpg" alt="">
                <h4><a href="#">Modou Mbacké Dieng/ Sénégal</a></h4>
                <p>Profil complété à 78% pour le master en développement web option JQuery et CodeIgniter Full...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-2.jpg" alt="">
                <h4><a href="#">Sokhna DIOP</a></h4>
                <p>Matser 2 Petrole et GAz...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-3.jpg" alt="">
                <h4><a href="#">Ndiaye</a></h4>
                <p>Licence et HSE pour les produits gaziers</p>
              </div>


            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

      </div>

      <!-- Recent Activity -->

      <!-- End Recent Activity -->



    </div><!-- End Right side columns -->

  </div>
</section>
</main>