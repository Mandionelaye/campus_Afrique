<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_mon_espace_langues extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('samakk/M_sama_keur_cruds', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->library('session');
		$var_sess = $this->session->samay_mbiir['can8_g1qsu_30q9o'];
		$this->link_list ='liste-des-langues';
		$this->nom_elt 		= 'langues';
		if(empty($var_sess))
		{
			//on logue l'erreur de connexion
			//$this->histo_save_err_conn($login,$pass);
			header("Location:".site_url()."acceder-a-son-espace?erreur=login&text=error_log");
			return;
		}
	}

	///////////////////Partie gestion des pieces
	public function list_langues()
	{
		$data = array();
		$code_candidat = $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];
	

		$data['all_data'] = $this->m_modele->get_data_liste_langues($code_candidat);
		$data['title'] 			= 'Liste des ' . $this->nom_elt;
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);

		$data['contents']	= 'v_sama_keur_cruds/langues_list';
		$this->load->view('template/layout_sama_keur', $data);

	}


	//////////////////////////formulaire d'ajout d'un nouveau élément

	//////////////////////////formulaire d'ajout d'un nouveau élément
	function ajouter_une_langue()
	{
		$code_candidat = $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] 			= "Ajout d'une langue";
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		
		$where_elt = " WHERE id NOT IN (SELECT id_langue FROM c_candidats_langues WHERE code_candidat='".$code_candidat."')";
		$data['dat_list_langue'] 	= $this->gl_bdd->get_data_for_combo("lst_langues", "id", "libelle", $where_elt);

		//definition des champs a controller
		$this->form_validation->set_rules('id_langue'	, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('commentaires', 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('niveau'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('lu'			, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('parle'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('ecrit'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('etat'		, 'Champ', 'required|xss_clean|trim');

		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');

		//demba_debug($this->session->samay_mbiir['can8_g1qsu_30q9o'] );
		//demba_debug($_POST);

		if ($this->form_validation->run() === FALSE) 
		{
			$data['contents']	= 'v_sama_keur_cruds/langues_form_add';
		} 
		else //si tout est ok
		{

			///$sql_doublons = "SELECT id FROM c_collectes_periodiques 
			//	WHERE mois='" . $this->input->post('mois') . "' AND annee='" . $this->input->post('annee') . "'  AND id_source ='" . $this->input->post('id_source') . "'";
			//$res_search_doublons = $this->gl_bdd->get_data_from_sql($sql_doublons); //rech doublons BD
			//demba_debug($res_search_doublons ['0'] ['id']);

			//if (empty($res_search_doublons['0']['id'])) {
				//on recupere l'id de la personne connectée depuis les sessions
				//$code_candid = 'NU00000081';
				//$code_candidat = $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];  deplacée en haut

				$data_to_insert 	= array(
					
					'code_candidat' => $code_candidat,
					'id_langue' 	=> $this->input->post('id_langue'),
					'commentaires' 	=> $this->input->post('commentaires'),
					'niveau'		=> $this->input->post('niveau'), 
					'lu'		 	=> $this->input->post('lu'), 
					'parle'		 	=> $this->input->post('parle'), 
					'etat'		 	=> $this->input->post('etat'), 
					'ecrit'		 	=> $this->input->post('ecrit'), 
					'date_creation'	=> date('Y-m-d'),
					//'id_op_saisie' 		=> $this->m_modele->id_op_saisie,
				);
				
			//demba_debug($data_to_insert);
				$result_add = $this->m_modele->insert_one_langue($data_to_insert); //insertion des données code BD


				/////////////////on historise l'action
				//$data_hist 	= array(
				//	'texte' 	=> "Collecte bureau(" . $this->input->post('id_source') . ") période de :" . $this->input->post('mois') . " - " . $this->input->post('annee'),
				//	'type'		=> 'nouvelle collecte',
				//	'id_site' 	=> $this->session->can8_g1qsu_30q9o['id_site'],
				//);
				//$this->db->insert('z_trace_activities', $data_hist);

				if ($result_add == '1') //si insertion avec succés on redirige
				{
					redirect('liste-des-langues');
				}
		
			//} 
			//else 
			//{
			//	demba_debug("Doublons non autorisé!");
			//}
		}
		$this->load->view('template/layout_sama_keur', $data);
	} //end of function



	////////////show details dans le CRUD courant
	function show_one_elt()
	{
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$data['code_elt']		= $code_elt;
		
		//$data['rdc2_rights'] 	= rdc2_get_auth('params'); //retourne Array ( [add] => [update] => [delete] => [read] => 1 ) 
			//permet de voir si ce profil connecté est autorisé à supprimer des données
		
		//$curr_profil 			= strtolower($this->session->can8_g1qsu_30q9o['profil']) ;
		//if($curr_profil ==  'agent saisie bec')
			//$data['is_auth_validate'] 	= '0';
		//else		
			//$data['is_auth_validate'] 	= '1';


		$data['title'] 					= "Détails sur la langue " ; //qui ser affiché sur la fiche
		$data['dt_one_element']		= $this->m_modele->get_data_one_langue($code_elt);
		$data['dt_one_element']		= $data['dt_one_element']['0'];
//demba_debug($data['date_one_element']);
		//$id_site 						=  $data['date_one_element']['id_source'];
		//$data['date_one_element_val']	= $this->m_modele->get_data_entry_one_elt($code_elt, $id_site, $mois, $annee);
		//$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, $data['title']);

		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		$data['contents']		= 'v_sama_keur_cruds/langues_show';
		$this->load->view('template/layout_sama_keur', $data);
	} //end on function
	
	
	

		////////////
		function supprimer_une_langue()
		{
			$args 					= func_get_args();
			$code_elt 				= $args[0];
			$this->db->where('id', $code_elt);
			$this->db->delete('c_candidats_langues');
		} //end on function



}//fin de la classe
