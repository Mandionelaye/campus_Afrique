<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_mon_espace_offre extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('samakk/M_sama_keur_cruds', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->library('session');
		$var_sess = $this->session->samay_mbiir['can8_g1qsu_30q9o'];
		$this->link_list ='candidat-liste-des-offres';
		$this->nom_elt 		= 'offres'; 
		if(empty($var_sess))
		{
			//on logue l'erreur de connexion
			//$this->histo_save_err_conn($login,$pass);
			header("Location:".site_url()."acceder-a-son-espace?erreur=login&text=error_log");
			return;
		}
	}

	///////////////////Partie gestion des offres
	public function list_offre()
	{
		$data 					= array();
		$code_candidat 			= $this->session->samay_mbiir['can8_g1qsu_30q9o']['code_elt'];
	
		$data['all_data'] 		= $this->m_modele->get_data_liste_offre($code_candidat);
		$data['title'] 			= 'Liste des ' . $this->nom_elt;
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);
		// var_dump($data['all_data']);
		$data['contents']	= 'v_sama_keur_cruds/offre_list';
		@$this->load->view('template/layout_sama_keur', $data);

	}
	
	


}//fin de la classe
