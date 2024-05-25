<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_mon_espace_diplomes extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('samakk/M_sama_keur_cruds', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->library('session');
		$var_sess = $this->session->samay_mbiir['can8_g1qsu_30q9o'];
		$this->link_list ='liste-des-diplomes';
		$this->nom_elt 		= 'diplomes';
		$this->url_img = 'j0kimpl8ldq/diplomes/';
		if(empty($var_sess))
		{
			//on logue l'erreur de connexion
			//$this->histo_save_err_conn($login,$pass);
			header("Location:".site_url()."acceder-a-son-espace?erreur=login&text=error_log");
			return;
		}
	}

	///////////////////Partie gestion des pieces
	public function list_diplomes()
	{
		$data = array();
		$code_candidat = $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];////recupération des donnéesde la session

		$data['all_data'] = $this->m_modele->get_data_liste_diplomes($code_candidat);
		$data['title'] 			= 'Liste des ' . $this->nom_elt;

		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);

		$data['contents']	= 'v_sama_keur_cruds/diplomes_list';
		$this->load->view('template/layout_sama_keur', $data);

	}


	//////////////////////////formulaire d'ajout d'un nouveau élément
	function ajouter_un_diplome()
	{
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] 			= "Ajout d'un diplôme";
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		
		$data['dat_list_dipl'] 	= $this->gl_bdd->get_data_for_combo("lst_diplomes", "id", "libelle", " ");

		//definition des champs a controller
		$this->form_validation->set_rules('libelle'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('annee_obtention'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('lieu_obtention'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('id_type_diplome'		, 'Champ', 'required|xss_clean|trim');
		//$this->form_validation->set_rules('etat'		, 'Champ', 'required|xss_clean|trim');

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
					//$code_candid = 'NU00000081';
					$code_candid	= $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];

				$data_to_insert 	= array(
					'code_candidat'		=> $code_candid,
					'libelle' 			=> $this->input->post('libelle'),
					'id_type_diplome' 	=> $this->input->post('id_type_diplome'),
					'annee_obtention'	=> $this->input->post('annee_obtention'),
					'lieu_obtention'	=> $this->input->post('lieu_obtention'),
					//'etat'		 		=> $this->input->post('etat'), //attention pb etat statut dans la vue
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
	

		////////////show details
		function supprimer_un_diplome()
		{
			$args 					= func_get_args();
			$code_elt 				= $args[0];
			$this->db->where('id', $code_elt);
			$this->db->delete('c_candidats_diplomes');
		} //end on function



		
		////////////show details
		function add_files()
		{					
			$code_candid	= $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];

			//demba_debug($_FILES);
			//demba_debug($_POST);

            $num_img     = $this->input->post('hidden_id_img');
            $photo_name = 'diplome__'.$code_candid.'__'.$num_img;
            $tab_img        = explode('.',$_FILES['img_banner']['name']);
            $img_extension  = end($tab_img);//get th eextension
			$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

            //$location       = get_url_home_banners().$photo_name.'.'.$img_extension;
			//$location       = back_get_url_img('news').$photo_name.'.'.$img_extension;
			$location       = $this->url_img.$photo_name.'.'.$img_extension;
//demba_debug($location);
            if(move_uploaded_file($_FILES['img_banner']['tmp_name'],$location))
			{
				echo "all done";
				$this->db->set('image', $photo_name.'.'.$img_extension);
				$this->db->where('id', $num_img);
				$this->db->update('c_candidats_diplomes'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
				
				redirect('liste-des-diplomes');
                //echo json_encode( $this->m_modele->update_one_img_on_a_banner($this->input->post('id'),$photo_name.'.'.$img_extension, $num_img), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
            }
            else
            {
                echo "  <a href='liste-des-diplomes'> Erreur de saisie, cliquez ici pour continur</a>";
            }
			

			//$this->db->where('id', $code_elt);
			//$this->db->delete('c_candidats_diplomes');
		} //end on function


		
	////////////show details
	function delete_one_file_confirm()
	{
		$args 					= func_get_args();
		$code_elt 				= $args[0];

		$data['title'] ="Suppression";
		$data['dat_one_row'] = $this->m_modele->get_data_one_diplome($code_elt);

		$data['contents']	= 'v_sama_keur_cruds/diplome_confirm_delete_fichier';
		$this->load->view('template/layout_sama_keur', $data);

	} //end on function


		////////////show details
		function delete_one_file_confirm_ok()
		{
			$args 					= func_get_args();
			$code_elt 				= $args[0];
	
			////suppression du  fichier physique
			$dat_one_row = $this->m_modele->get_data_one_diplome($code_elt);
			//demba_debug();
			if(unlink($this->url_img.$dat_one_row['image']))
			{
				$this->db->set('image', null);
				$this->db->where('id', $code_elt);
				$this->db->update('c_candidats_diplomes'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
				
				redirect('liste-des-diplomes');
			}

			
		} //end on function
	



}//fin de la classe
