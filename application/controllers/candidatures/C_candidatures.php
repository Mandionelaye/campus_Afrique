<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_candidatures extends MY_Controller
{

	public function __construct()
	{
		//CONSTRUCTEUR
		parent::__construct();
		$this->load->model('candidatures/M_candidature', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes
		
		$this->load->helper('djitte'); //pour la gestion des droits

		//$this->m_modele->id_op_saisie = $this->session->can8_g1qsu_30q9o['id'];    ////////id du user connecté

		$this->link_list 	= 'liste-candidatures';    //////////lien du breadcrumb envers la liste sera utilisé de maniére dynamique
		$this->nom_elt 		= 'Candidatures';  ///nom de l'élément du CRUD courant qui sera affichée de manière dynamique
	}


	public function index() //AFFICHAGE  de la liste des données
	{
		$id_site 			= $this->session->can8_g1qsu_30q9o['id_site'];
		 
		 $profil = $this->session->can8_g1qsu_30q9o['profil'];
		 if($profil == 'Ecole'){
            $idEcoele 			= $this->session->can8_g1qsu_30q9o['id'];
		 }else{
			$idEcoele = null;
		 }
		if ( !empty($this->session->can8_g1qsu_30q9o['idOffre'])) {  // {BJ} => pour filter la liste des candidatures
			$idOffre  = $this->session->can8_g1qsu_30q9o['idOffre'];
		}else{
			$idOffre = null;
		}
		$list_site_name 	= 	array(
			'1' =>  'bee',
			'2' =>  'bec',
			'3' =>  'ANSD',
		);
		// demba_debug($id_site);
		$data['site_name'] 	= $list_site_name[$id_site];
			 $data['all_data'] 	= $this->m_modele->get_data_liste( $idOffre,$idEcoele,$list_site_name[$id_site]); //CHARGER LES DOnnéeS POUR LA LISTe
		//$data['all_dat'] 	= $this->m_modele->get_data_liste($list_site_name[$id_site]); //CHARGER LES DOnnéeS POUR LA LISTe
        $data['dat_form_offre'] 	= $this->gl_bdd->get_data_for_combo("c_offres", "id", "libelle"	, " WHERE `etat`='1'");
		$data['rdc2_rights'] 	= rdc2_get_auth('params'); //retourne Array ( [add] => [update] => [delete] => [read] => 1 ) 
			//permet de voir si ce profil connecté est autorisé à ajouter des données
		//demba_debug($data['rdc2_rights']); 

		$data['title'] 			= 'Liste des ' . $this->nom_elt;
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		$data['contents']		= 'v_bo_candidatures/v_candidature_liste'; //CHARGER la vue courrante
		$this->load->view('template/layout', $data);

		//$this->load->view('parametres/v_list_bailleurs', $data); 
	}


	//////////////////////////formulaire d'ajout d'un nouveau élément
	function add_one_element()
	{
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] 			= 'Formulaire ajout:' . $this->nom_elt;
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);

		//definition des champs a controller
		$this->form_validation->set_rules('code_candidat'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('id_offre'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('code_depot'		, 'Champ', 'required|xss_clean|trim');      
		$this->form_validation->set_rules('montant_inscr'		, 'Champ', 'required|xss_clean|trim');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');

		//demba_debug($code_courrier);
		//demba_debug($_POST);

		if ($this->form_validation->run() === FALSE) 
		{
			$data['contents']	= 'v_bo_candidatures/v_candidature_form_add';
		} 
		else //si tout est ok
		{

			///$sql_doublons = "SELECT id FROM c_collectes_periodiques 
			//	WHERE mois='" . $this->input->post('mois') . "' AND annee='" . $this->input->post('annee') . "'  AND id_source ='" . $this->input->post('id_source') . "'";
			//$res_search_doublons = $this->gl_bdd->get_data_from_sql($sql_doublons); //rech doublons BD
			//demba_debug($res_search_doublons ['0'] ['id']);

			//if (empty($res_search_doublons['0']['id'])) {
				$data_to_insert 	= array(

					'code_candidat' 			=> $this->input->post('code_candidat'),
					'code_depot'		=> $this->input->post('code_depot'),
					'montant_inscr'		 	=> $this->input->post('montant_inscr'), //attention pb etat statut dans la vue
					'montant_justif'		=> $this->input->post('montant_justif'),
					'mode_paie'		=> $this->input->post('mode_paie'),
					'montant_justif'		=> $this->input->post('montant_justif'),
					'etat'		=> $this->input->post('etat'),
					'id_op_saisie' 	=> $this->m_modele->id_op_saisie,
					'date_last_modif' 	=> $this->m_modele->date_last_modif,
				);
				$result_add = $this->m_modele->insert_one_element($data_to_insert); //insertion des données code BD

		//demba_debug($_POST);

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
		$this->load->view('template/layout', $data);
	} //end of function




	////////////show details dans le CRUD courant
	function show_one_elt()
	{
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$data['code_elt']		= $code_elt;

		$data['rdc2_rights'] 	= rdc2_get_auth('params'); //retourne Array ( [add] => [update] => [delete] => [read] => 1 ) 
			//permet de voir si ce profil connecté est autorisé à supprimer des données
		
		$curr_profil 			= strtolower($this->session->can8_g1qsu_30q9o['profil']) ;
		if($curr_profil ==  'agent saisie bec')
			$data['is_auth_validate'] 	= '0';
		else		
			$data['is_auth_validate'] 	= '1';


		$data['title'] 					= "Détails sur le " . $this->nom_elt; //qui ser affiché sur la fiche
		$data['date_one_element']		= $this->m_modele->get_data_one_elt($code_elt);

		//$id_site 						=  $data['date_one_element']['id_source'];
		//$data['date_one_element_val']	= $this->m_modele->get_data_entry_one_elt($code_elt, $id_site, $mois, $annee);
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, $data['title']);
		$data['contents']		= 'v_bo_candidatures/v_candidature_show';
		$this->load->view('template/layout', $data);
	} //end on function


	////////////pour la suppression
	function confirm_delete_one_elt()
	{	
		$data['title'] 					= "Supprimer le " . $this->nom_elt; //qui ser affiché sur la fiche
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, $data['title']);

		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$data['code_elt']		= $code_elt;
		$data['contents']		= 'v_bo_candidatures/v_candidature_confirm_delete';
		$this->load->view('template/layout', $data);
	} //end on function

	function delete_one_elt()
	{ 
		/*
			INSERT INTO `lst_pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`, `etat`, `date_last_modif`)
		 	VALUES ('193', '686', 'SN', 'SEN', 'Senegal', 'Sénégal', '1', current_timestamp());
		 */
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$this->db->where('id', $code_elt);
		$this->db->delete('c_candidatures');

		redirect('liste-candidatures');
	} //end on function


	//////////////////////////formulaire dE  MODIF D 1 élément
	function edit_one_elt()
	{
		///////:chargement des données à modifier
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$data['code_elt']		= $code_elt;
		$data['dat_one_elt']	= $this->m_modele->get_data_one_elt($code_elt);
		$data['title'] 			= 'Formulaire modification:' . $this->nom_elt;
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		// $data['dt_list_sect'] 	= $this->gl_bdd->get_data_for_combo("c_bee_sections", "id", "libelle", " ");
		//$data['dt_list_source'] = $this->gl_bdd->get_data_for_combo("c_bec_gammes", "id", "CONCAT(code,' / ',libelle)", " ");

		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');

		// a_dynamiser  definition des champs a controller
		$this->form_validation->set_rules('description', 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('mois', 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('annee', 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('id_source', 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('statut', 'Champ', 'required|xss_clean|trim');
		///$this->form_validation->set_rules('statut', 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');

		//demba_debug($code_courrier);

		if ($this->form_validation->run() === FALSE) {
			// a_dynamiser
			$data['contents']	= 'v_prod/v_collectes_periodiques_form_edit';
		} else //si tout est ok
		{
			//$code_courrier 		= cod_get_next_courr('arrivee');
			// a_dynamiser
			$data_to_insert 	= array(
				'description' 	=> $this->input->post('description'),
				'mois' 			=> $this->input->post('mois'),
				'annee' 		=> $this->input->post('annee'),
				'id_source'		=> $this->input->post('id_source'),
				'statut' 			=> $this->input->post('statut'),
				'date_creation'	=> $this->input->post('date_creation'),

				//'etat' 				=> '1',
				//'id_op_saisie' 	=> $this->m_modele->id_op_saisie,

			);
			$result_add = $this->m_modele->update_one_ss($this->input->post('code_elt'), $data_to_insert); //insertion des données code BD

			if ($result_add == '1') //si insertion avec succés on redrige
			{
				redirect($this->link_list);
				//$data['date_one_cour']	= $this->m_modele->get_data_one_courrier_arr($code_courrier);
				//$data['contents']		= 'courrier_arr/v_add_img';
			}
		}
		$this->load->view('template/layout', $data);
	} //end of function

	function profil_candidat()
	{ 
		/*
			INSERT INTO `lst_pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`, `etat`, `date_last_modif`)
		 	VALUES ('193', '686', 'SN', 'SEN', 'Senegal', 'Sénégal', '1', current_timestamp());
		 */
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		//demba_debug($code_candidat);

		$data['all_data_exp'] 			= $this->m_modele->get_data_liste_experiences($code_elt);
		$data['all_data_langues'] 		= $this->m_modele->get_data_liste_langues($code_elt);
		$data['all_data_diplomes'] 		= $this->m_modele->get_data_liste_diplomes($code_elt);
		$data['date_one_details']		= $this->m_modele->get_data_liste_pieces($code_elt);
		$data['all_data_autre_piece']		= $this->m_modele->get_data_liste_autre_piece($code_elt);
        //   var_dump($data['all_data_autre_piece']);
		@$data['date_one_element']		= $this->m_modele->get_data_liste_cand($code_elt);

		@$data['contents']	= 'v_sama_keur/sama_cv';
		@$this->load->view('template/layout', $data);
	} //end on function
    
	// pour un refus candidature
    function rejet(){
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$rej="refuser";
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data =  $this->m_modele->get_data_one_elt($code_elt);

		 $fullName = $data['prenom'].' '.$data['nom'];
		$this->form_validation->set_rules('avis_du_jury' , 'Champ', 'xss_clean|trim');
		 
		$data_inser_update = array(
			'avis_du_jury'=> $this->input->post('avis_du_jury'),
			'etat'=> $rej,
		);
		$query =  $this->m_modele->update_one_s($code_elt, $data_inser_update);
		if($query){
			$this->email($data['email'], 'liste-candidatures', $fullName, $data['nomEcole']);
		}

	}
	// pour une Acceptation
	function retenu(){
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$rej="accepter";
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data =  $this->m_modele->get_data_one_elt($code_elt);

		 $fullName = $data['prenom'].' '.$data['nom'];
		$this->form_validation->set_rules('avis_du_jury' , 'Champ', 'xss_clean|trim');
		 
		$data_inser_update = array(
			'avis_du_jury'=> $this->input->post('avis_du_jury'),
			'etat'=> $rej,
		);
		var_dump($data_inser_update);
		$query =  $this->m_modele->update_one_s($code_elt, $data_inser_update);
		if($query){
			$this->email($data['email'], 'liste-candidatures', $fullName, $data['nomEcole']);
		}
	}

		// pour une Acceptation en concour
		function concour(){
			$args 					= func_get_args();
			$code_elt 				= $args[0];
			$rej="concour";
			$this->load->helper('security'); //pour controller les failes xss
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data =  $this->m_modele->get_data_one_elt($code_elt);
	
			 $fullName = $data['prenom'].' '.$data['nom'];
			$this->form_validation->set_rules('avis_du_jury' , 'Champ', 'xss_clean|trim');
			$this->form_validation->set_rules('date' , 'Champ', 'xss_clean|trim');
			$this->form_validation->set_rules('heure' , 'Champ', 'xss_clean|trim');
			 $avis = "Vous êtes admise au concours.<br />".
			 "Heure:". $this->input->post('heure'). "<br />".
			 'Date'. $this->input->post('date'). "<br />".
			 "Description: <br />". $this->input->post("avis_du_jury");
			$data_inser_update = array(
				'avis_du_jury'=> $avis,
				'etat'=> $rej,
			);
			var_dump($data_inser_update);
			$query =  $this->m_modele->update_one_s($code_elt, $data_inser_update);
			if($query){
				$this->email($data['email'], 'liste-candidatures', $fullName, $data['nomEcole']);
			}
		}

		// pour une Acceptation en concour
		function test(){
			$args 					= func_get_args();
			$code_elt 				= $args[0];
			$rej="test";
			$this->load->helper('security'); //pour controller les failes xss
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data =  $this->m_modele->get_data_one_elt($code_elt);
	
			 $fullName = $data['prenom'].' '.$data['nom'];
			$this->form_validation->set_rules('avis_du_jury' , 'Champ', 'xss_clean|trim');
			$this->form_validation->set_rules('date' , 'Champ', 'xss_clean|trim');
			$this->form_validation->set_rules('heure' , 'Champ', 'xss_clean|trim');
			 $avis = "Vous êtes admise au test.\n".
			 "Heure: ". $this->input->post('heure'). "\n".
			 'Date: '. $this->input->post('date'). "\n".
			 "Description: \n". $this->input->post("avis_du_jury");
			$data_inser_update = array(
				'avis_du_jury'=> $avis,
				'etat'=> $rej,
			);
			var_dump($data_inser_update);
			$query =  $this->m_modele->update_one_s($code_elt, $data_inser_update);
			if($query){
				$this->email($data['email'], 'liste-candidatures', $fullName, $data['nomEcole']);
			}
		}
	// pour l'envoie d'email
	function email($email, $redirect, $fullName, $nomEcole){
        $subject = "Reponse Etablissement";
					$message="
						<!DOCTYPE html>
						<html>
						<head>
						<meta charset='UTF-8'>
						<meta name='viewport' content='width=device-width, initial-scale=1.0'>
						</head>
						<body>
						<center><h1><b>Reponse sur Campus Afrique</b></h1></center><br>
						<h4>Bonjour $fullName </h4>
						<p> Vous avez reçu une réponse de votre demande d'admission de la part de $nomEcole. <br />
						consulter votre compte pour plus de dérails. <br />
						cordialement,
						  </p>
						</body>
						</html>
					";

					 $this->load->library('email');


						$config = array(
							'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
							'smtp_host' => 'mail.proimmosenegal.com',//'server.gouyhost.sn', 
							'smtp_port' => 465,
							'smtp_user' => 'campusafrique@proimmosenegal.com',//'infocandidatures@perfplustech.com',
							'smtp_pass' => 'passer@1234',//'info567Candiatu789',
							//'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
							'mailtype' => 'html', //plaintext 'text' mails or 'html'
							//'newline' => '\r\n', //in seconds
							'charset' => 'utf-8',
							// $config['charset']   = 'utf-8',
							$config['mailtype']  = 'html',
							'wordwrap' => TRUE,
						);
						$this->email->initialize($config);


						
						$this->email->set_newline("\r\n");
						$this->email->from('campusafrique@proimmosenegal.com');
						$this->email->to($email);
						$this->email->subject($subject);
						$this->email->message($message);
						$this->email->attach(base_url('assets/img/presentation.png'));

						if($this->email->send()) 
						{
							//$result_add = $this->m_modele->insert_one_element_principal($data_to_insert); //insertion des données code BD
							redirect($redirect);	
						}
						else
							demba_debug("erreur envoi email");
	}
}