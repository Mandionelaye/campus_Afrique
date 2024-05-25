<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_mon_espace_experiences extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('samakk/M_sama_keur_cruds', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->library('session');
		$var_sess = $this->session->samay_mbiir['can8_g1qsu_30q9o'];
		$this->link_list ='liste-des-diplomes';
		if(empty($var_sess))
		{
			//on logue l'erreur de connexion
			//$this->histo_save_err_conn($login,$pass);
			header("Location:".site_url()."acceder-a-son-espace?erreur=login&text=error_log");
			return;
		}
	}

	///////////////////Partie gestion des pieces
	public function list_experiences()
	{
		$data = array();
		$data['all_data'] = $this->m_modele->get_data_liste_experiences();

		$data['contents']	= 'v_sama_keur_cruds/experiences_list';
		$this->load->view('template/layout_sama_keur', $data);

	}


	//////////////////////////formulaire d'ajout d'un nouveau élément
	function ajouter_une_experience()
	{
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] 			= "Formulaire ajout: d'un";
		//$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		
		$data['dat_list_dipl'] 	= $this->gl_bdd->get_data_for_combo("lst_diplomes", "id", "libelle", " ");

		//definition des champs a controller
		$this->form_validation->set_rules('libelle'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('annee_obtention'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('lieu_obtention'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('id_type_diplome'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('etat'		, 'Champ', 'required|xss_clean|trim');

		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');

		//demba_debug($this->session->samay_mbiir['can8_g1qsu_30q9o'] );
		//demba_debug($_POST);

		if ($this->form_validation->run() === FALSE) 
		{
			$data['contents']	= 'v_sama_keur_cruds/diplomes_form_add';
		} 
		else //si tout est ok
		{

			///$sql_doublons = "SELECT id FROM c_collectes_periodiques 
			//	WHERE mois='" . $this->input->post('mois') . "' AND annee='" . $this->input->post('annee') . "'  AND id_source ='" . $this->input->post('id_source') . "'";
			//$res_search_doublons = $this->gl_bdd->get_data_from_sql($sql_doublons); //rech doublons BD
			//demba_debug($res_search_doublons ['0'] ['id']);

			//if (empty($res_search_doublons['0']['id'])) {
					$code_candid = 'NU00000081';
				$data_to_insert 	= array(
					//'code_candidat'		=> $code_candid,
					'libelle' 			=> $this->input->post('libelle'),
					'id_type_diplome' 	=> $this->input->post('id_type_diplome'),
					'annee_obtention'	=> $this->input->post('annee_obtention'),
					'lieu_obtention'	=> $this->input->post('lieu_obtention'),
					'etat'		 		=> $this->input->post('etat'), //attention pb etat statut dans la vue
					'date_creation'		=> date('Y-m-d'),
					//'id_op_saisie' 		=> $this->m_modele->id_op_saisie,
				);
				
			//demba_debug($_POST);
				$result_add = $this->m_modele->insert_one_candidat_diplome($data_to_insert); //insertion des données code BD


				/////////////////on historise l'action
				//$data_hist 	= array(
				//	'texte' 	=> "Collecte bureau(" . $this->input->post('id_source') . ") période de :" . $this->input->post('mois') . " - " . $this->input->post('annee'),
				//	'type'		=> 'nouvelle collecte',
				//	'id_site' 	=> $this->session->can8_g1qsu_30q9o['id_site'],
				//);
				//$this->db->insert('z_trace_activities', $data_hist);

				if ($result_add == '1') //si insertion avec succés on redirige
				{
					redirect($this->link_list);
				}
			//} 
			//else 
			//{
			//	demba_debug("Doublons non autorisé!");
			//}
		}
		$this->load->view('template/layout_sama_keur', $data);
	} //end of function
	




}//fin de la classe
