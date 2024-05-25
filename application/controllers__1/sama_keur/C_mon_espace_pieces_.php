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

	
	///////////////////Partie gestion des pieces
	public function list_pieces()
	{
		
		//print('verif_mdp__verif_mdp__verif_mdp__');
		//demba_debug($datas_user);
		$data = array();
		$data['contents']	= 'v_sama_keur_cruds/pieces_list';
		$this->load->view('template/layout_sama_keur', $data);

	}
	

}//fin de la classe
