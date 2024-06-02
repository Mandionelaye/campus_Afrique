<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accueil extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('text_helper');
		$this->load->helper('security');
		//$this->load->helper('gest_menus');
					
		//initialisation de la session	
		$this->load->library('calendar') ;
		$this->load->library('session');		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('javascript');
		$this->load->model('front/M_profil', 'mm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('front/M_connexion_comptes', 'mmm_modele');///Classse modéle générale de travail on travaille avec  l'alias

		$this->load->model('M_home_back', 'm_modele'); 
		//$this->m_modele->id_op_saisie = $this->session->can8_g1qsu_30q9o['id'];
		//$this->m_modele->id_site = $this->session->can8_g1qsu_30q9o['id_site'];


	}

	public function home()
	{	
		$curr_profil = strtolower($this->session->can8_g1qsu_30q9o['profil']) ;
		$id = $this->session->can8_g1qsu_30q9o['id'];
		$profil = $this->session->can8_g1qsu_30q9o['profil'];
		//liste des congés à venir
		$data['stat_glob_acc']	= $this->m_modele->get_global_stat();
		//demba_debug($this->session->can8_g1qsu_30q9o['profil']);
		$site_name				= $this->session->can8_g1qsu_30q9o['_site_name'];
        

		if(in_array($curr_profil,array('votant')))//agent de saisie
		{
			$data['nb_prod_entre']	= $data['stat_glob_acc']['nb_prod_entre'];
			$data['nb_prod']		= $data['stat_glob_acc']['nb_prod'];

			//$data['dat_hist']		= $this->m_modele->get_data_histo_one_agent($this->m_modele->id_op_saisie);	
			//demba_debug($data['dat_hist'])		;
			$data['contents']		= 'dashboard/home_user';
		}
		else
		{
			$cont =	$this->m_modele->get_all_Candidature($id, $profil);
			$contOff =	$this->m_modele->get_all_Offres($id, $profil);
		    //  if (!empty($contOff) && !empty($cont)){
				 $data['act_collectes'] = count( $cont);
				 $data['act_collectesOff'] = count( $contOff);
				

				// var_dump($data['act_collectes']);
			// /getting the historic
			// $data['histo']	= $this->m_modele->get_data_histo();
			$data['contents']	= 'dashboard/home';
		}	
		$this->load->view('template/layout',$data);
	}

	
	public function ongoing()
	{	
		$data['contents']		= 'dashboard/ongoing';
		$this->load->view('template/layout',$data);
	}

	public function profil_admin()
	{
		$data = array();
		$site_name				= $this->session->can8_g1qsu_30q9o['_site_name'];
		$id 					= $this->session->can8_g1qsu_30q9o['id'];
		//@$code_agent = $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];
		//demba_debug($site_name);
        $data['profil'] = $this->session->can8_g1qsu_30q9o['profil'];
 		$data['all_data'] = $this->mmm_modele->get_data_liste($site_name);
		//$data['title'] 			= 'Liste des ' . $this->nom_elt;
		//$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		if($this->session->can8_g1qsu_30q9o['profil'] == 'Ecole'){
			@$data['date_one_element']		= $this->mm_modele->get_data_liste_ecole($id);
		}elseif ($this->session->can8_g1qsu_30q9o['profil'] == 'responsable_filiere') {
			@$data['date_one_element']		= $this->mm_modele->get_data_liste_respon($id);
		}else{
			@$data['date_one_element']		= $this->mm_modele->get_data_liste($site_name);
		}
		@$data['contents']	= 'dashboard/user_profil';
		@$this->load->view('template/layout', $data);

	}
	
	public function home_global()
	{	
		$curr_profil = strtolower($this->session->can8_g1qsu_30q9o['profil']) ;
		//liste des congés à venir
		//$data['stat_glob_acc']	= $this->m_modele->get_global_stat();
		//demba_debug($this->session->can8_g1qsu_30q9o['profil']);
		$site_name				= $this->session->can8_g1qsu_30q9o['_site_name'];


		$data['contents'] = 'frontoffice/front_office';
		$this->load->view('template/layout',$data);
	}
	
	
}

