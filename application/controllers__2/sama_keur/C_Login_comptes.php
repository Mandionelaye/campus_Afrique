<?php
defined('BASEPATH') or exit('No direct script access allowed');

//class C_Login_comptes extends MY1_Controller
class C_Login_comptes extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/M_connexion_comptes', 'm_modele');///Classse modéle générale de travail on travaille avec  l'alias
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->library('session');
		$this->load->helper('djitte'); //pour la gestion des droits


		//$this->m_modele->id_op_saisie = $this->session->can8_g1qsu_30q9o['id'];    ////////id du user connecté

		$this->link_list 	= 'liste-offres';    //////////lien du breadcrumb envers la liste sera utilisé de maniére dynamique
		$this->nom_elt 		= 'offre';  ///nom de l'élément du CRUD courant qui sera affichée de manière dynamique
	}

	public function create_account() //AFFICHAGE  de la liste des données
	{
		//dés que l'on arrive àce niveau on désactive toutes les données sessions
		//$this->session->sess_destroy();	// destruction des donnees de la session

		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->helper('codif');
		$this->load->library('form_validation');
		$data['title'] 			= 'Liste des ' . $this->nom_elt.'s';
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);

		$data['dt_categ'] 	= $this->gl_bdd->get_data_for_combo("c_categorie_des_offres", "id", "libelle", " ");

		//demba_debug($data['dt_source']);
		//definition des champs a controller 
		$this->form_validation->set_rules('the_sex'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('the_surname'	, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('the_name'	, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('email'		, 'Champ', 'required|xss_clean|trim|is_unique[c_candidats.email]');
		$this->form_validation->set_rules('conf_password', 'Champ', 'required|xss_clean|trim');  
		$this->form_validation->set_rules('password', 'Password', 'required|matches[conf_password]');
		
		//$this->form_validation->set_rules('password'	, 'Champ', 'required|xss_clean|trim');        


		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');
		$this->form_validation->set_message('matches', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">SVP, confirmer le mot de passe saisie en haut!</b>');
		$this->form_validation->set_message('is_unique', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Ce compte est déjà utilisé par un autre!</b>');

		
		$data['dt_categ'] 	= $this->gl_bdd->get_data_for_combo("c_categorie_des_offres", "id", "libelle", " ");
		//demba_debug($code_courrier);
		//demba_debug($_POST);

		if ($this->form_validation->run() === FALSE) 
		{
			//$data['contents']	= 'v_prod_bo/v_offres_form_add';
			$data['contents']	= 'v_sama_keur/creer_compte_mon_espace';
			$this->load->view('template/layout_auth', $data);

		} 
		else //si tout est ok
		{		
			$next_code = gen_code_agent();
			//demba_debug($next_code);
					$email = $this->input->post('email');
				$data_to_insert 	= array(
					'code_candidat'	=> $next_code,
					'prenom' 		=> $this->input->post('the_surname'),
					'nom'		 	=> $this->input->post('the_name'),
					'sexe'	 		=> $this->input->post('the_sex'),
					'dialoukay' 		=> $this->input->post('password'),
					'email'			=> $email,
					//'date_naiss' 	=> $this->input->post('date_cloture'),
					//'lieu_naiss' 	=> $this->input->post('date_cloture'),
					'etat'		 	=> '0', //par défaut on désactive son compte
					'date_creation'	=> date('Y-m-d'),
					'ip'	 		=>	$_SERVER['REMOTE_ADDR'] ,

					//'etat' 				=> '1',
					'id_op_saisie' 	=> '2',
				);
				$result_add = $this->m_modele->insert_one_element_principal($data_to_insert); //insertion des données code BD
				if ($result_add == '1') //si insertion avec succés on redirige
				{
					/////////////////////envoi du mail
					$subject = "Perf Cand";
					$message="<center><h1><b>Inscription Réussie plateforme candidature</b></h1></center><br>
					 <p>Merci de vous consulter votre email afin d'activer votre compte</p>"; //é = &eacute;      è = &egrave;
			/*
						$config = array(
							'protocol' =>'ssmtp',
							'smtp_host' => 'ssl://ssmtp.googlemail.com', //'cupscakedija.com',
							'smtp_port' => '465', //'smtp_port' => '465',
							'smtp_user' => 'com.perfplus@gmail.com',
							'smtp_pass' =>  'ComPerf@12345;Gma1',
							'mailtype' =>'html',
							'charset' => 'iso-8859-1',
							'wordwrap' => true,
						);
				*/
						$this->load->library('email');


						$config = array(
							'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
							'smtp_host' => 'server.gouyhost.sn',//'server.gouyhost.sn', 
							'smtp_port' => 465,
							'smtp_user' => 'infocandidatures@perfplustech.com',//'infocandidatures@perfplustech.com',
							'smtp_pass' => 'info567Candiatu789',//'info567Candiatu789',
							//'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
							'mailtype' => 'text', //plaintext 'text' mails or 'html'
							//'newline' => '\r\n', //in seconds
							//'charset' => 'iso-8859-1',  $config['charset']   = 'utf-8';
							$config['mailtype']  = 'html',
							'wordwrap' => TRUE
						
						);
						$this->email->initialize($config);


						
						$this->email->set_newline("\r\n");
						$this->email->from('infocandidatures@perfplustech.com');
						$this->email->to($email);
						$this->email->subject($subject);
						$this->email->message($message);
						$this->email->attach(base_url('assets/img/presentation.png'));

						if($this->email->send()) 
						{
							//$result_add = $this->m_modele->insert_one_element_principal($data_to_insert); //insertion des données code BD
							redirect('creer-son-compte-chek-email');		
						}
						else
							demba_debug("erreur envoi email");


					//redirect('creer-son-compte-chek-email');
				}
		}

	}


	public function se_connecter()
	{
		$data_tab = array(
			'bad_token' =>'Erreur car jeton incorrect ou expiré!',
			'error_log' => 'Login et/ou mot de passe incorrect',
			'' =>'',
		);
		$data = array();
		if(!empty($_REQUEST['text']))
		{
			if(!empty( $data_tab[$_REQUEST['text']]))
				$data['error_mess']= $data_tab[$_REQUEST['text']];
		}

		//$this->load->view('v_sama_keur/se_connecter_a_mon_espace', $data);
		$data['contents']	= 'v_sama_keur/se_connecter_a_mon_espace';
		$this->load->view('template/layout_auth', $data);
	}

	public function show_message_ok_create_account()
	{
		$data = array();
		$data['contents']	= 'v_sama_keur/show_message_success';
		$this->load->view('template/layout_auth', $data);

	}

	public function show_message_error_email()
	{
		$data = array();
		$data['contents']	= 'v_sama_keur/show_message_error_email';
		$this->load->view('template/layout_auth', $data);

	}
	
	public function verif_conn()
	{
		$login = $this->input->post('username');
		//$pass = $this->input->post('password');
		//$ien = $this->input->post('ien');
		$ien = null;
		$datas_user = $this->get_user_step_1($login, $ien);
		$email_ok = $datas_user['can8_g1qsu_30q9o']['email'];

		//print('verif_conn');
		//demba_debug($datas_user['can8_g1qsu_30q9o']['email'] );


 		if(empty($email_ok))
		{
			//on logue l'erreur de connexion
			//$this->histo_save_err_conn($login,$pass);
			header("Location:".site_url()."erreur-connexion-login?erreur=login&text=error_log");
			return;
		}
		else
		{
			$this->start_session($datas_user);			
			$the_mail = $email_ok;
			$this->session->set_userdata('email_ok', $email_ok);
			header("Location:".site_url("dial-thi-thiaby"));
			return;


			//echo "hhh";
			//demba_debug($datas_user['can8_g1qsu_30q9o']['email'] );

			//$photo = '';//file_get_contents("https://apps.education.sn/C_personnel_api/get_pic_src/".$ien);
			//$this->session->set_userdata('photo', $photo);
			//histo
			//$this->histo_save_enter($datas_user['can8_g1qsu_30q9o'],'in');

			//faire les tests nécessaire afin de voir si nous allons rediriger ou non dépendemment du profil de la personne
			//$profil_name = $this->session->can8_g1qsu_30q9o['id_profil'];
			//if($profil_name==16)
			//{
			//}
			//else //if($profil_name==16)
			//{
				//header("Location:".site_url("back-office-gestionnaire"));
			//}
		}
	}

	public function verif_mdp()
	{
		//demba_debug($this->session->email_ok);
		//demba_debug($_POST);
		$login = $this->session->email_ok;
		$pass = $this->input->post('password');
		//$ien = $this->input->post('ien');
		$ien = null;
		$datas_user = $this->get_user_step_2($login,$pass, $ien);
		//$email_ok = $datas_user['can8_g1qsu_30q9o']['email'];

		//print('verif_mdp__verif_mdp__verif_mdp__');
		
		//demba_debug($this->session->userdata);
		//demba_debug($datas_user);


 		if(empty($datas_user))
		{
			//on logue l'erreur de connexion
			//$this->histo_save_err_conn($login,$pass);
			header("Location:".site_url()."erreur-connexion-login?erreur=login&text=error_log");
			return;
		}
		else
		{
			//$this->session->sess_destroy();

			//$this->start_session($datas_user);		
			//$this->session->set_userdata('menu_roles', $data['menu_roles']);
			$this->session->set_userdata('userdata',null);
			$this->session->set_userdata('samay_mbiir',$datas_user);

			header("Location:".site_url("mon-espace"));
			return;


			//echo "hhh";
			//demba_debug($datas_user['can8_g1qsu_30q9o']['email'] );

			//$photo = '';//file_get_contents("https://apps.education.sn/C_personnel_api/get_pic_src/".$ien);
			//$this->session->set_userdata('photo', $photo);
			//histo
			//$this->histo_save_enter($datas_user['can8_g1qsu_30q9o'],'in');

			//faire les tests nécessaire afin de voir si nous allons rediriger ou non dépendemment du profil de la personne
			//$profil_name = $this->session->can8_g1qsu_30q9o['id_profil'];
			//if($profil_name==16)
			//{
			//}
			//else //if($profil_name==16)
			//{
				//header("Location:".site_url("back-office-gestionnaire"));
			//}
		}
	}

	public function se_deconnecter()
	{
		//demba_debug($this->session->can8_g1qsu_30q9o);
		//	$this->conn->histo_save_enter($this->session->can8_g1qsu_30q9o,'out');
		$this->histo_save_enter($this->session->can8_g1qsu_30q9o,'out');
		$this->session->sess_destroy();	// destruction des donnees de la session
		header("Location:".site_url());
	}

	private function get_user_step_1($login, $ien)
	{
		
		$datas_user = null;
		$connexion_items = $this->m_modele->identification($login, $ien);
		if(empty($connexion_items))
		{
			header("Location:".site_url('erreur-connexion-login'));
			return;
		}
		else
		{
			//demba_debug($connexion_items);
			if ($connexion_items != null)
				$datas_user = array(
					'can8_g1qsu_30q9o'=> array(
						'email'			=> $connexion_items['email'],
						'ip'			=> $_SERVER['REMOTE_ADDR'],
						'logged_in' 		=> TRUE
					 )
				);
		}
		return $datas_user;
	}

	private function get_user_step_2($login, $mdp,$ien)
	{
		
		$datas_user = null;
		$connexion_items = $this->m_modele->identification_ok($login, $mdp);
		if(empty($connexion_items))
		{
			header("Location:".site_url('erreur-connexion-login'));
			return;
		}
		else
		{
			//demba_debug($connexion_items);
			if ($connexion_items != null)
				$datas_user = array(
					'can8_g1qsu_30q9o'=> array(
						'thiaby'			=> $connexion_items['id'],
						'email'			=> $connexion_items['email'],
						'etat'			=> $connexion_items['etat'],
						'code_elt'		=> $connexion_items['code_candidat'],
						'_the_name'		=> $connexion_items['_the_name'],
						'token'			=> $connexion_items['etat'],
						'ip'			=> $_SERVER['REMOTE_ADDR'],
						'logged_in' 		=> TRUE
					 )
				);
		}
		return $datas_user;
	}


	protected function start_session($data_user)
	{


		//$this->session->set_userdata($data_user);

		//demba_debug($data_user);			
			//BAKS Recuperation des roles
			$id_profil 	= $data_user['can8_g1qsu_30q9o']['id_profil'];
		//	$ien 		=  $data_user['can8_g1qsu_30q9o']['ien'];
			$id_site 	= $data_user['can8_g1qsu_30q9o']['id_site'];

			$tab_mrole	= array();   ///Tableau des roles des menus
			$tab_smrole	= array();  ///Tableau des roles des sous menus
			$cur_menu	= '';
			
			//$tab_role	= $this->role->get_conn_roles($id_profil, $id_site);

			// var_dump($tab_role);
			// exit();
			
			/*
			foreach($tab_role as $val)
			{
				///Tableau des droits sur les menus
				if($cur_menu != $val->mcode)
				{
					$tab_mrole[$val->mcode] = 1;
					$cur_menu = $val->mcode;
				}
				
				//Tableau des droits sur les sous menus
				//On ne recup�re que les valeurs positives
				if($val->d_read != '-1'){ $tab_smrole[$val->smcode]['d_read']	= $val->d_read;}
				if($val->d_add != '-1'){ $tab_smrole[$val->smcode]['d_add']	= $val->d_add;}
				if($val->d_upd != '-1'){ $tab_smrole[$val->smcode]['d_upd']	= $val->d_upd;}
				if($val->d_del != '-1'){ $tab_smrole[$val->smcode]['d_del']	= $val->d_del;}
			}
			*/

			///Chargement des donn�es de la tableau $data
			//$data['menu_roles']		= $tab_mrole;
			//$data['smenu_roles']	= $tab_smrole;
		
			//Mise des donn�es en session
			//$this->session->set_userdata('menu_roles', $data['menu_roles']);
			//$this->session->set_userdata('smenu_roles', $data['smenu_roles']);
			//BAKS FIN Recuperation des roles
			
			
			//donnees en session
			//$this->session->set_userdata($data_user);	
			////$this->session->set_userdata('id_site',$data['connexions_item']['id_site']);
			//on log les donnees begin : Enregistrement des donnees de l'utilisateur dans la table z_connexions ip, navigateur, profil, nom 
	
			
			///$data['username']	= $data['connexions_item']['user_conn'];
			//@$data['email']		= $data['connexions_item']['email'];
			//$data['username']	= $data_user['can8_g1qsu_30q9o']['nom'];
			//@$data['email']		= $data_user['can8_g1qsu_30q9o']['email'];

			//$pass=$this->conf->encrypt($data['connexions_item']['password'],'idyby');
			//$this->session->set_userdata('username', $data['username']);
			//$this->session->set_userdata('pass', $pass);


	}


	
	public function check_mdp()
	{
		//demba_debug($this->session->email_ok);
		$data = array();
		$data['contents']	= 'v_sama_keur/se_connecter_a_mon_espace1';
		$this->load->view('template/layout_auth', $data);

	}


}//fin de la classe
