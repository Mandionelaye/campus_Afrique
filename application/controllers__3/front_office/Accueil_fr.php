<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_fr extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('offress/M_Offres', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		//$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->helper('djitte'); //pour la gestion des droits


		//$this->m_modele->id_op_saisie = $this->session->can8_g1qsu_30q9o['id'];    ////////id du user connecté

		$this->link_list 	= 'liste-offres';    //////////lien du breadcrumb envers la liste sera utilisé de maniére dynamique
		$this->nom_elt 		= 'offre';  ///nom de l'élément du CRUD courant qui sera affichée de manière dynamique
	}

	public function index()
	{
		$data['title'] 			= 'Liste des ' . $this->nom_elt.'s';
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		$data['contents']		= 'frontoffice/v_offres_liste_front'; //CHARGER la vue courrante
		$this->load->view('template/layout', $data);

	}
	
	
	public function list_all_offers_front()
	{
		$data['all_data'] 	= $this->m_modele->get_data_liste(); //CHARGER LES DOnnéeS POUR LA LISTe
		
		//demba_debug($data['all_data']);
		$data['contents']	= 'frontoffice/v_offres_liste_front';
		$this->load->view('template/layout_auth', $data);
	}
	


		////////////show details dans le CRUD courant
		function show_details_one_offre()
		{

			//on vide les données sessions

			$this->session->set_userdata('donnees_du_postulant',
				null	
			);

			//demba_debug($this->session->donnees_du_postulant['dt_diploms']['0']['libelle']);


			//$args 					= func_get_args();			
			//$code_elt 				= $args[0];
			$code_elt				= $_REQUEST['offre'];
			$data['code_elt']		= $code_elt;

			//$dat_one_periode		= $this->m_modele->get_one_period_form_one_collecte($code_elt);
			//$mois 	= $dat_one_periode['mois'];
			//$annee 	= $dat_one_periode['annee'];
			// ajouter une fontion qqui  renvoi le moi et l'annee a partir de la l'id_colletes passee  en argument 	

	
			$data['title'] 					= "Détails sur l' " . $this->nom_elt; //qui ser affiché sur la fiche
			$data['date_one_element']		= $this->m_modele->get_data_one_elt($code_elt);
		//demba_debug($data['date_one_element']);

			//$id_site 						=  $data['date_one_element']['id_source'];
			//$data['date_one_element_val']	= $this->m_modele->get_data_entry_one_elt($code_elt, $id_site, $mois, $annee);
			$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, $data['title']);
			$data['contents']		= 'frontoffice/my_space_show_one_offer';
			$this->load->view('template/layout_auth', $data);
		} //end on function

	
}
