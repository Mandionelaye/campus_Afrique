<?php
if(!empty($act_collectes)){
    $data['all_candidature'] = $act_collectes;
    $data['all_offre'] = $act_collectesOff;
    $this->load->view('template/header');
    $this->load->view('template/navigation_bar');
    $this->load->view($contents, $data);
    $this->load->view('template/footer'); 
}else{
    $this->load->view('template/header');
    $this->load->view('template/navigation_bar');
    $this->load->view($contents);
    $this->load->view('template/footer'); 
}
