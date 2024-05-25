<?php
defined('BASEPATH') or exit('No direct script access allowed');

//class C_Login_comptes extends MY1_Controller
class C_mon_espace_pieces extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('samakk/M_sama_keur_cruds', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->library('session');
		$this->load->helper('djitte'); //pour la gestion des droits
		$this->url_img = 'j0kimpl8ldq/pieces/';

		$this->link_list 	= 'liste-des-pieces';    //////////lien du breadcrumb envers la liste sera utilisé de maniére dynamique
		$this->nom_elt 		= 'pieces';  ///nom de l'élément du CRUD courant qui sera affichée de manière dynamique


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
	
	///////////////////Partie gestion des pieces
	public function list_pieces()
	{
		////Pour recuperer la session
		$code_elt   			=$this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];
		//demba_debug($code_elt);
		$data['code_elt']			= $code_elt;
		$data['date_one_element']	= $this->m_modele->get_data_liste_pieces($code_elt);
		$data['title'] 				= 'Liste des ' . $this->nom_elt;

		$data['breadcrumbs']		= array($this->link_list, $this->nom_elt, @$data['title']);

		$data['contents']	= 'v_sama_keur_cruds/pieces_list';
		@$this->load->view('template/layout_sama_keur', $data);

	}
	
	///////////////:chargement des données à modifier
	function edit_one_element()
	{
		///////:chargement des données à modifier code  de la personne connectée
		$code_agent   			=$this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];

		//demba_debug($code_agent);
		$data['code_agent']		= $code_agent;		
		$data['data_one_elt']	= $this->m_modele->get_data_one_details($code_agent);
		//demba_debug($data['data_one_elt']['cand_niveau_etude']);

		$this->load->helper('security');//pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Modifier mes données';
		
		$this->form_validation->set_rules('id'		, 'Champ', 'xss_clean|trim');
		//$this->form_validation->set_rules('email'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('tel_2'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('email_2'				, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('adresse'					, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('cni'	, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('passport'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('extrait_naissance'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('cand_experiences'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('cand_niveau_etude'		, 'Champ', 'required|xss_clean|trim');
		//$this->form_validation->set_rules('photo'				, 'Champ', 'required|xss_clean|trim');
		
		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');
			
		//demba_debug($code_agent);

		if ($this->form_validation->run() === FALSE) 
		{
			$data['contents']	= 'v_sama_keur_cruds/modifer_pieces';
		}
		else //si tout est ok
		{
			//demba_debug($_POST);
			$data_to_update 	= array(
				'id'				=> $this->input->post('id'),
				//'email'				=> $this->input->post('email'),
				'tel_2'				=> $this->input->post('tel_2'),
				'email_2'			=> $this->input->post('email_2'),
				'adresse'			=> $this->input->post('adresse'),
				'cni'				=> $this->input->post('cni'),
				'passport'			=> $this->input->post('passport'),
				'extrait_naissance'	=> $this->input->post('extrait_naissance'),
				'cand_experiences'	=> $this->input->post('cand_experiences'),
				'cand_niveau_etude'	=> $this->input->post('cand_niveau_etude'),
			);


			///on cherche d'abord si l'element n'a pas encore de données dans la table c_candidats_details alors on fait une insertion, sinon on fait une update
			$test_existe = $this->gl_bdd->get_data_one_key('c_candidats_details', 'code_candidat', $code_agent, 'code_candidat');
			//demba_debug("kkk".$test_existe);

			if(!empty($test_existe))
			{
				$result_add = $this->db->update('c_candidats_details',
					$data_to_update,
					array('code_candidat' => $code_agent)
						);//insertion des données code BD
			}
			else
			{
				$data_to_update['code_candidat']=$code_agent;

				$result_add = $this->db->insert('c_candidats_details',
				$data_to_update
					);//insertion des données code BD
			}


			if($result_add=='1') //si insertion avec succés on redrige
			{
				redirect('liste-des-pieces');
				//$data['data_one_elt']	= $this->m_modele->get_data_one_courrier_arr($code_agent);
				//$data['contents']		= 'courrier_arr/v_add_img';
			}
		}
		@$this->load->view('template/layout_sama_keur', $data);

	}//end of function
	
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
			$code_elt   			=$this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];
			//demba_debug($code_elt);
			$data['code_elt']			= $code_elt;
	
			////suppression du  fichier physique
			$dat_one_row = $this->m_modele->get_data_one_details($code_elt);
			//demba_debug();
			if(unlink($this->url_img.$dat_one_row['photo']))
			{
				$this->db->set('photo', null);
				$this->db->where('code_candidat', $code_elt);
				$this->db->update('c_candidats_details'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
				
				redirect('liste-des-pieces');
			}

			
		} //end on function


		function add_files()
		{					
			$code_candid	= $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];

			//demba_debug($_FILES);
			//demba_debug($_POST);

            $num_img     = $this->input->post('hidden_id_img');
			//demba_debug($num_img);
            $photo_name = 'piece__'.$code_candid.'__'.$num_img;
            $tab_img        = explode('.',$_FILES['img_banner']['name']);

            $img_extension  = end($tab_img);//get th eextension
			//demba_debug($img_extension);
			$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png');
			
			$data['valides']=$extensions_valides;
			if (!in_array($img_extension, $extensions_valides)) {
				$data['contents']	= 'v_sama_keur_cruds/erreur_fichier_pieces';
				$this->load->view('template/layout_sama_keur', $data);
			} else {
			
            //$location       = get_url_home_banners().$photo_name.'.'.$img_extension;
			//$location       = back_get_url_img('news').$photo_name.'.'.$img_extension;
			$location       = $this->url_img.$photo_name.'.'.$img_extension;
//demba_debug($location);
            if(move_uploaded_file($_FILES['img_banner']['tmp_name'],$location))
			{
				echo "all done";
				$this->db->set('photo', $photo_name.'.'.$img_extension);
				$this->db->where('code_candidat', $code_candid);
				$this->db->update('c_candidats_details'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
				
				redirect('liste-des-pieces');
                //echo json_encode( $this->m_modele->update_one_img_on_a_banner($this->input->post('id'),$photo_name.'.'.$img_extension, $num_img), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
            }
            else
            {
                echo "  <a href='liste-des-pieces'> Erreur de saisie, cliquez ici pour continur</a>";
            }
		}}

}//fin de la classe
