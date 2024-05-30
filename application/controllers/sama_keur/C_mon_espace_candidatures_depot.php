<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_mon_espace_candidatures_depot extends CI_Controller
{

	public function __construct()
	{
		//CONSTRUCTEUR
		parent::__construct();		
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->model('candidatures/M_candidature', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('candidats/M_candidats', 'm_modele_cand');///Classse modéle générale de travail on travaille avec  l'alias


		$this->load->helper('djitte'); //pour la gestion des droits

		//$this->m_modele->id_op_saisie = $this->session->can8_g1qsu_30q9o['id'];    ////////id du user connecté

		$this->link_list 	= 'liste-candidatures';    //////////lien du breadcrumb envers la liste sera utilisé de maniére dynamique
		$this->nom_elt 		= 'Candidatures';  ///nom de l'élément du CRUD courant qui sera affichée de manière dynamique
	}

////////////cheking global, si pas de diplome alors message diplome
	public function verifier_mon_depot() //AFFICHAGE  de la liste des données
	{
		//demba_debug($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt']); on teste si la personne est connectée
		if(empty($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt']))
		{
			header("Location:".site_url()."acceder-a-son-espace?erreur=expire&text=error_log");
			return;
		}

		$data['title'] 				= "Détails sur l' " . $this->nom_elt; //qui ser affiché sur la fiche
		$args 					= func_get_args();
		$code_conc 				= $args[0];
		$data['code_concours']	= $code_conc;

		if(!empty($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt']))
		{
			$code_candidat 			= $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];
		}
		$data['code_candidat']	= $code_candidat;


		//d'abord on vérifie si le candidat n'a pas encore déposé si oui il faut bloqué et informé
		$req_sql = "Select COUNT(*) as nb_element FROM c_candidatures WHERE code_candidat='".$code_candidat."' AND id_offre='".$code_conc."'";
		$result	= $this->gl_bdd->get_data_from_sql($req_sql);//liste des diplomes de la personne
		$has_already_submitted	= $result['0']['nb_element'];
		if(!empty($has_already_submitted))
		{
			header("Location:".site_url()."infos-apres-depot");
			return;
		}


		$data['dt_infos']		= $this->m_modele_cand->get_data_one_elt_all_det($code_candidat);//INFOS DE BASE

		$var__diploms			= $this->m_modele_cand->get_data_one_cand_all_diplomes($code_candidat);//liste des diplomes de la personne
		$data['dt_diploms']		= $this->transform_diploms($var__diploms);//liste des diplomes de la personne
		//demba_debug($data['dt_diploms']);

		$var__dat		= $this->m_modele_cand->get_data_one_cand_all_experiences($code_candidat);//liste des diplomes de la personne
		$data['dt_experiences']	= $this->transform_experiences($var__dat);//liste des diplomes de la personne

		//$data['dt_langues']		= $this->m_modele_cand->get_data_one_cand_all_langues($code_candidat);//liste des diplomes de la personne
		$var__dat			= $this->m_modele_cand->get_data_one_cand_all_langues($code_candidat);//liste des diplomes de la personne
		$data['dt_langues']	= $this->transform_langues($var__dat);//liste des diplomes de la personne

		//demba_debug($var__dat);
		//demba_debug($data['dt_infos']);


		///////////on stocke toutes les données en session
		$this->session->set_userdata('donnees_du_postulant',
			array(
				'dt_infos' 			=> $data['dt_infos'],
				'dt_diploms' 		=> $data['dt_diploms'],
				'dt_experiences' 	=> $data['dt_experiences'],
				'dt_langues' 		=> $data['dt_langues'],
				//'' => $data['dt_infos'],
			)	
		);

		
		$data['contents']			= 'v_sama_keur/deposer_candidature_confirmer_step_1';
		$this->load->view('template/layout_auth', $data); 
		
	}


	////////////information comme quoi vous avez déja déposé
	public function message_aleady_done() //AFFICHAGE  de la liste des données
	{
		$data = array();
		$data['contents']			= 'v_sama_keur/you_have_already_submitted';
		$this->load->view('template/layout_auth', $data); 
	}

	////////////////////////////////////transformation des données plus stockage
	private function transform_diploms( $list_dat)
	{
		$retour = array();
		if(empty($list_dat))
		{
			return array(null);
		}	

		foreach($list_dat as $one_row)
		{
			$retour[] = array(
				'id_type_diplome' 	=> $one_row['id_type_diplome'],
				'libelle' 			=> $one_row['libelle'],
				'annee_obtention' 	=> $one_row['annee_obtention'],
				'lieu_obtention' 	=> $one_row['lieu_obtention'],
			);

		}
		return $retour;

	}///end of the function


	////////////////////////////////////transformation des données plus stockage
	private function transform_experiences( $list_dat)
	{
		$retour = array(); if(empty($list_dat)){ return array(null); }	

		foreach($list_dat as $one_row)
		{
			$retour[] = array(
				'id_type_exp' 	=> $one_row['id_type_exp'],
				'libelle' 			=> $one_row['libelle'],
				'date_debut' 	=> $one_row['date_debut'],
				'date_fin' 	=> $one_row['date_fin'],
				'entreprise_lieu' 	=> $one_row['entreprise_lieu'],
			);
		}
		return $retour;

	}///end of the function


	////////////////////////////////////transformation des données plus stockage
	private function transform_langues( $list_dat)
	{
		$retour = array(); if(empty($list_dat)){ return array(null); }	

		foreach($list_dat as $one_row)
		{
			$retour[] = array(
				'id_langue' 	=> $one_row['id_langue'],
				'_the_langague' => $one_row['_the_langague'],
				'niveau' 		=> $one_row['niveau'],
				'lu' 			=> $one_row['lu'],
				'parle' 		=> $one_row['parle'],
				'ecrit' 		=> $one_row['ecrit'],
			);
		}
		return $retour;

	}///end of the function




	///////////cheking global, si pas de diplome alors message diplome
	public function validate_my_candidature() //AFFICHAGE  de la liste des données
	{
		///////////////quand la personne veux déposer
		//demba_debug($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt']);
		if(empty($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt']))
		{
			header("Location:".site_url()."acceder-a-son-espace?erreur=expire&text=error_log");
			return;
		}

		//d'abord on vérifie si le candidat n'a pas encore déposé
		$data['title'] 				= "Détails sur l' " . $this->nom_elt; //qui ser affiché sur la fiche
		$args 					= func_get_args();
		$code_conc 				= $args[0];
		$data['code_concours']	= $code_conc;

		if(!empty($this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt']))
		{
			$code_candidat 			= $this->session->userdata['samay_mbiir']['can8_g1qsu_30q9o']['code_elt'];
		}

		$data['code_candidat']	= $code_candidat;

		$data['dt_infos']		= $this->session->donnees_du_postulant['dt_infos'];//INFOS DE BASE
		$data['dt_diploms']		= $this->session->donnees_du_postulant['dt_diploms'];//INFOS DE BASE
		$data['dt_experiences']	= $this->session->donnees_du_postulant['dt_experiences'];//INFOS DE BASE
		$data['dt_langues']		= $this->session->donnees_du_postulant['dt_langues'];//INFOS DE BASE

		////////////il faut obligatoirement déclaré son expérience et niveau d'etudes dans la table  c_candidats_details
		if(empty($data['dt_infos']['cand_niveau_etude']))
		{
			redirect('infos-depot-message?t=pieces_0_1');
		}
		else if(empty($data['dt_infos']['cand_experiences']))
		{
			redirect('infos-depot-message?t=pieces_0_2');
		}
		else if(empty($data['dt_diploms']['0'])) ////////////remplir le minimum d'informations avant de pouvoir continuer!à dynamier car dépends de l'offre en cours
		{
			redirect('infos-depot-message?t=diplome');
		}	
		else if(empty($data['dt_experiences']['0'])) 
		{ ////////////remplir le minimum d'informations avant de pouvoir continuer!à dynamier car dépends de l'offre en cours

			redirect('infos-depot-message?t=experience');
		}	
			
		
		////////////remplir le minimum d'informations avant de pouvoir continuer!à dynamier car dépends de l'offre en cours
		if(empty($data['dt_diploms']['0']))
		{
			redirect('infos-depot-message?t=diplome');
		}
		
	//infos-depot-message
	$nombre_aleatoire = rand(100, 999);

		$data_to_insert 	= array(
					
			'code_candidat' 	=> $code_candidat,
			'id_offre' 			=> $code_conc,
			'code_depot' 		=> 'ADYNAM'.$nombre_aleatoire,
			'cand_niveau_etude'	=> $data['dt_infos'] ['cand_niveau_etude'], 
			'cand_experiences'	=> $data['dt_infos'] ['cand_experiences'], 
			//'can_experience_1'		 	=> $this->input->post('parle'), 
			//'can_experience_2'		 	=> $this->input->post('etat'), 
			//'can_experience_3'		 	=> $this->input->post('ecrit'), 
			// 'can_diplome_1'		 		=> $data['dt_infos']['can_diplome'], 
			'date_creation'	=> date('Y-m-d'),
			'etat'	=> 1,
			'id_op_saisie' 		=> 2,
		);

		for ($i=0; $i < 3; $i++) 
		{ 
			$next = $i+1;
			$data_to_insert['can_experience_'.$next] = @$data['dt_experiences'][$i]['libelle'];
			$data_to_insert['can_experience_'.$next.'_periode'] = @$data['dt_experiences'][$i]['date_debut'].'--'.@$data['dt_experiences'][$i]['date_fin'];
		}
		
		
	///demba_debug($data_to_insert);
		$result_add = $this->m_modele->insert_one_candidature_depuis_my_space($data_to_insert); //insertion des données code BD
		if ($result_add == '1') //si insertion avec succés on redirige
		{
			redirect('liste-des-candidatures');
			
	//demba_debug($data_to_insert);
		}
		else
		{
			echo "erreur";
		}


		
		$data['contents']			= 'v_sama_keur/deposer_candidature_confirmer_step_1';
		$this->load->view('template/layout_front', $data); 
		
	}////end of the function



		////////////showing thed details
		

}//:end of the class
