<?php

class C_connexion_responsable extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("");
    }

    // afficher la page de connexion de l'ecole
	public function connexion_resp()
	{
		$data_tab = array(
			'bad_token' =>'Erreur car jeton incorrect ou expiré!',
			'error_log' => 'Login et/ou mot de passe incorrect',
			'' =>'',
		);
		$data = array();
		if(!empty($_REQUEST['text']))
		{
			if(!empty( $data_tab[$_REQUEST['text']]))
			$data['error_mess']= $data_tab[$_REQUEST['text']];
	}
	if (!empty($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['_the_name'])) {
		redirect("");
	}
	$data['contents']		= 'dashboard/connexion-responsable';
	$this->load->view('template/layout_auth', $data);
	}
}