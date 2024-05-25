<?php

if(!empty($this->session->samay_mbiir))////si la session est vide
	{
        $this->load->view('template/header_smk');
        $this->load->view('template/navigation_bar_smk'); 
}
	else
	{
		$this->load->view('template/header_front');
        $this->load->view('template/navigation_bar_front');

		
	}

$this->load->view($contents);
$this->load->view('template/footer_front'); 