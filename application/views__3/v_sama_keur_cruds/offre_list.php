<?php show_breadcrumbs($breadcrumbs);   ?>



<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-default'>
            <div class='panel-body'>

                <div class='card'>
                    <div class=" table-responsive">
                        <div class="col-sm-12">
                            <table id='datatable-buttons' class='datatable table table-striped table-bordered'>
                                <thead>
                                    <tr>
										<th>Libellé</th>
                                        <th>Description</th>
										<th>Date clôture</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
									
                                   // demba_debug($all_data);
									foreach ($all_data as $value) 
                                    {
                                     //   if($site_name == $value->id_source || $site_name=='ANSD')
                                      //  {
                                            ?>
                                            <tr>
												<td><?php echo $value->libelle; ?></td>
                                                <td><?php echo $value->description; ?></td>
												<td><?php echo $value->date_cloture; ?></td>
												
                                                 <!--td>   
                                                    <a href="<?php echo site_url('visualiser-details-offre?offre=' . $value->id);  ?>">
                                                    <?php 
                                                    // echo '---'.$value->code_depot;
                                                       /*
                                                        if(empty($value->code_depot))
                                                            {

                                                                echo "<span class='badge bg-success '> &nbsp &nbsp  Actif &nbsp &nbsp </span>"; 

                                                            }
                                                        else
                                                            echo "<span class='badge bg-danger '> &nbsp  Inactif &nbsp </span>";
                                                        
                                                        */
                                                    ?>
                                                    </a>
                                                    
                                                </td-->
                                                <td>
                                                    <?php
                                                        $diff_nb_days = diff_n_jour_2($value->date_cloture);
                                                        if($diff_nb_days>=0)
                                                        {
                                                    ?>
                                                    <a href="<?php echo site_url('visualiser-details-offre?offre=' . $value->id);  ?>"> 
                                                        <span class='badge bg-primary '>&nbsp Postuler &nbsp</span>
                                                    </a> 
                                                
                                                    <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="#"> 
                                                                <span class='badge bg-warning '>&nbsp Cloturé &nbsp</span>
                                                            </a> 
                                                        
                                                            <?php
                                                        }
                                                    ?>
                                              </td>
                                            </tr>
                                        <?php
                                        }

                                   
                                  //  }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div> <!-- End Row -->
 
                                    </main>


