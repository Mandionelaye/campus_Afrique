<?php
defined('BASEPATH') or exit('No direct script access allowed');

//class C_Login_comptes extends MY1_Controller
class C_mon_espace extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	
	    //initialisation de la session	
		$this->load->library('session');
		$this->load->model('M_connexions', 'conn');	
        $this->load->model('Global_bdd'  , 'gl_bdd');  
		//$this->load->model('M_sys_role', 'role');	
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('javascript');
		$this->load->model('samakk/M_profil', 'mm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('samakk/M_sama_keur_cruds', 'm_cruds');///Classse modéle générale de travail on travaille avec  l'alias

		$this->load->model('front/M_connexion_comptes', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias

		//$this->m_modele->id_op_saisie = $this->session->can8_g1qsu_30q9o['id'];    ////////id du user connecté

		$this->link_list 	= 'liste-offres';    //////////lien du breadcrumb envers la liste sera utilisé de maniére dynamique
		$this->nom_elt 		= 'offre';  ///nom de l'élément du CRUD courant qui sera affichée de manière dynamique


		///		
		$var_sess = $this->session->samay_mbiir['can8_g1qsu_30q9o'];

		if(empty($var_sess))
		{
			//on logue l'erreur de connexion
			//$this->histo_save_err_conn($login,$pass);
			header("Location:".site_url()."acceder-a-son-espace?erreur=login&text=error_log");
			return;
		}
	}


	public function dashboard()
	{
		$data = array();
		@$code_candidat = $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];
	
		//demba_debug($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['_the_name']);
		$data['all_offres'] 	= $this->mm_modele->get_data_liste_candidature($code_candidat); //CHARGER LES DOnnéeS POUR LA LISTe
		$data['contents']	= 'v_sama_keur/v_smk_dashboard';
		$this->load->view('template/layout_sama_keur', $data);
	}

	public function show_infos()
	{
		@$message_type = $_REQUEST['t'];
		$data = array();
		$the_mess = "Vos infos de bases";

		switch ($message_type) {
			case 'diplome':
				$the_mess = "vos diplômes (au moins un)";break;
			case 'experience':
				$the_mess = "vos expériences (au moins un)";break;
			case 'pieces_0_1':
				$the_mess = "Votre niveau d'étude ";break;
			case 'pieces_0_2':
				$the_mess = "Votre niveau expérience ";break;
			case 2:
				$the_mess = "vos diplômes (au moins un)";break;
		}
	//demba_debug($the_mess);
		$data['the_message']	= $the_mess;
		
		$data['contents']	= 'v_sama_keur/v_smk_dashboard_show_infos';


		$this->load->view('template/layout_sama_keur', $data);
	}
	

	///////////////////Partie gestion des pieces
	public function profil()
	{
		$data = array();
		@$code_candidat = $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];
	

		$data['all_data'] = $this->m_modele->get_data_liste($code_candidat);
		//$data['title'] 			= 'Liste des ' . $this->nom_elt;
		//$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		@$data['date_one_element']		= $this->mm_modele->get_data_liste($code_candidat);
		@$data['contents']	= 'v_sama_keur/profil_list';
		@$this->load->view('template/layout_sama_keur', $data);

	}

	public function sama_cv()
	{
		$code_candidat	= $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];
		//demba_debug($code_candidat);

		$data = array();
		$data['all_data_exp'] = $this->m_cruds->get_data_liste_experiences($code_candidat);
		$data['all_data_langues'] = $this->m_cruds->get_data_liste_langues($code_candidat);
		$data['all_data_diplomes'] = $this->m_cruds->get_data_liste_diplomes($code_candidat);
		$data['date_one_details']		= $this->m_cruds->get_data_liste_pieces($code_candidat);

		@$data['date_one_element']		= $this->mm_modele->get_data_liste($code_candidat);

		@$data['contents']	= 'v_sama_keur/sama_cv';
		@$this->load->view('template/layout_sama_keur', $data);
	}


	private function get_user($login, $pass, $ien)
	{
		
		$datas_user = null;
		$connexion_items = $this->conn->identification($login, $pass, $ien);
		if ($connexion_items != null)
			$datas_user = array(
				'can8_g1qsu_30q9o'=> array(
					'nom'			=> $connexion_items['user_conn'],
					'id'			=> $connexion_items['page_bidar_'],
					'id_site'		=> $connexion_items['id_site'],
					'profil'     	=> $connexion_items['profil_name'],
					'id_profil'		=> $connexion_items['id_profil'],
					'email'			=> $connexion_items['email'],
					'_site_name'	=> strtolower($connexion_items['_site_name']),
				//	'id_type_struct'	=> $connexion_items['id_type_struct'],//$connexion_items['id_profil'],// a dynamiser bddiack
				//	'id_typ_struct_n'=> $connexion_items['id_typ_struct_n'],//$connexion_items['id_profil'],// a dynamiser bddiack
				//	'id_structure'	=> $connexion_items['id_structure'],//$connexion_items['id_profil'],// a dynamiser bddiack
				//	'nom_structure'	=> $connexion_items['nom_structure'],//$connexion_items['id_profil'],// a dynamiser bddiack
				   // 'id_atlas'		=> $connexion_items['id_atlas'],
					'logged_in' 		=> TRUE
				 )
			);

		//demba_debug($connexions_item);
		return $datas_user;
	}

	public function show_message_error_mdp()
	{
		$data = array();
		$data['contents']	= 'v_sama_keur/show_message_error_mdp';
		$this->load->view('template/layout_auth', $data);

	}

	public function show_message_ok_change_mdp()
	{
		$data = array();
		$data['contents']	= 'v_sama_keur/show_message_success_mdp';
		$this->load->view('template/layout_auth', $data);

	}

	function verif_wethio_thiabi() 
	{
		$login = $this->session->email_ok;
		$pass = $this->input->post('password');
		//$ien = $this->input->post('ien');
		$ien = null;
		$datas_user = $this->get_user($login,$pass, $ien);
		demba_debug($datas_user);
		if(empty($datas_user))
		{
			header("Location:".site_url()."erreur-change-mdp?erreur=login&text=error_log");
			return;
		}
		else
		{
			$new_pass= $this->input->post('new_password');

			$data_to_insert = array(
				'dialoukay'=> $new_pass,
			);
			//$data_to_insert1 = array(
			//	'mot_de_passe'=> $new_pass,
			//);
			$result_add = $this->conn->update_thiaby_si_c_candidats($login, $data_to_insert); //insertion des données code BD
			//$result_add = $this->conn->update_thiaby_si_sys($login, $data_to_insert1); //insertion des données code BD

			$this->session->set_userdata('userdata',null);
			$this->session->set_userdata('samay_mbiir',$datas_user);
			header("Location:".site_url("success-change-mdp"));
			return;

		}
		
	}

	public function change_password()
	{
		$data['contents']	= 'dashboard/change_password';
		$this->load->view('template/layout_auth', $data);

	}

}//fin de la classe