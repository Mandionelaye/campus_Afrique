
    <div id="conteneur-page" >
<section class="section dashboard">
      <div id="offres" class="row">

        <!-- Left side columns -->
          <div class="row" style="margin:0px 4px 20px 4px">

            <!-- Recent Sales -->
            <div class="col-md-12">
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
                  <h5 class="card-title"><a href='<?php echo site_url("visualiser-toutes-les-offres")?>'   >Consulter la liste globale</a></h5>

                  <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="7" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-borderless datatable dataTable-table">
                    <thead>
                      <tr>
						  <th scope="col" data-sortable="" ><a href="#" class="dataTable-sorter">Catégorie</a></th>
						  <th scope="col" data-sortable="" ><a href="#" class="dataTable-sorter">Libellé</a></th>
						  <th scope="col" data-sortable="" ><a href="#" class="dataTable-sorter">Date lancement</a></th>						  
              <th scope="col" data-sortable="" ><a href="#" class="dataTable-sorter">Etat/Clôture</a></th>

					  </tr>
                    </thead>
                    <tbody>
						<!--tr><th scope="row"><a href="#">#2457</a></th><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td><span class="badge bg-success">Approved</span></td></tr><tr><th scope="row"><a href="#">#2107</a></th><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td><span class="badge bg-warning">Pending</span></td></tr>
						<tr><th scope="row"><a href="#">#2049</a></th><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$107</td><td><span class="badge bg-success">Approved</span></td></tr>
						<tr><th scope="row"><a href="#">#2644</a></th><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td><span class="badge bg-danger">Rejected</span></td></tr><tr><th scope="row"><a href="#">#2644</a></th><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td><span class="badge bg-success">Approved</span>
						</td></tr-->
						
						<?php 
							foreach($all_offres as $one_row)
							{
								?><tr>
									<!--th scope="row"><a href="#"><?php //echo $one_row->id; ?></a></th-->
									<td><?php echo $one_row->_categ_offre; ?></td>
									<td><a href="<?php echo site_url('visualiser-details-offre?offre='.$one_row->id) ?>" class="text-primary"><?php echo $one_row->libelle	; ?></a></td>
									<td><?php echo $one_row->date_cloture; ?></td>
									<td><span class="badge bg-success"><?php echo $one_row->date_publication; ?></span></td>
								</tr><?php 
							}
						?>
					</tbody>
                  </table></div><div class="dataTable-bottom"><div class="dataTable-info">Affichage de 1 à 5 sur 5 lignes</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          </div>
        </div>
<div class="sep1" style="margin-top:40px;margin-bottom:40px"></div>
<div id="expiré" class="row" style="margin:20px 4px 20px 4px">
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

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
                  <h5 class="card-title">Offres qui vont bientôt expirés <span>| Aujourd'hui</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Logo</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Nombre de place restant</th>
                        <th scope="col">Date clôture</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      foreach($all_offres as $one_row)
                      {
                        ?><tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt="" width="100" height="40"></a></th>
                          <td><?php echo $one_row->description; ?>
                            </td>
                          <td><a href="#" class="text-primary"><?php echo $one_row->libelle	; ?></a></td>
                          <td><?php echo $one_row->date_cloture; ?></td>
                        <td><?php echo "<a href='visualiser-details-offre?offre=".$one_row->id."'> &nbsp; <button class='btn-primary'>Postuler</button></a>"; ?>
                            </td>
                        </tr><?php 
                      }
                    ?>

                      <!--tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr-->
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
</div>

<div class="sep2" style="margin-top:40px;margin-bottom:40px"></div>
<div  class="row" style="margin:20px 4px 20px 4px">
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

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
                  <h5 class="card-title">Offres qui vont bientôt expirés <span>| Aujourd'hui</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Logo</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Nombre de place restant</th>
                        <th scope="col">Date clôture</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      foreach($all_offres as $one_row)
                      {
                        ?><tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt="" width="100" height="40"></a></th>
                          <td><?php echo $one_row->description; 
                            echo "<a href='visualiser-details-offre?offre=".$one_row->id."'> &nbsp; <button class='btn-primary'>Postuler</button></a>"; ?>
                            </td>
                          <td><a href="#" class="text-primary"><?php echo $one_row->libelle	; ?></a></td>
                          <td><?php echo $one_row->date_cloture; ?></td>
                        </tr><?php 
                      }
                    ?>

                      <!--tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr-->
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
</div>
<div class="row sep3" style="margin-top:40px;height:300px;">

        <!-- Right side columns -->
        <div class="col-8" style="margin-top:10px;" >
      
        </div>
        
</div>
</div></div>
    </section>
</div>

