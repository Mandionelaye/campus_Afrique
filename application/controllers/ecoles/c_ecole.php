<?php
class C_ecole extends MY_Controller
{
    public function __construct()
	{
		//CONSTRUCTEUR
		parent::__construct();
		$this->load->model("ecoles/M_ecole");
		$this->load->model('Global_bdd', 'gl_bdd');  //une classe globale regroupant bcp de méthodes

		$this->load->helper('djitte'); //pour la gestion des droits

		$this->nom_elt 		= 'Etablissement'; 
		$this->link_list 	= 'liste-Etablissement';  
		$this->url_img = 'j0kimpl8ldq/logo/';
    }
	
	public function index() //AFFICHAGE  de la liste des données
	{
		$id_site 			= $this->session->can8_g1qsu_30q9o['id_site'];
		$list_site_name 	= 	array(
			'1' =>  'bee',
			'2' =>  'bec',
			'3' =>  'ANSD',
		);
		$data['site_name'] 	= $list_site_name[$id_site];

		 $data['rdc2_rights'] 	= 'add'; //retourne Array ( [add] => [update] => [delete] => [read] => 1 ) 
		//permet de voir si ce profil connecté est autorisé à ajouter des données
	//demba_debug($data['rdc2_rights']); 

			$data['all_data']	= $this->M_ecole->affiEcolle();
			$data['title'] 			= 'Liste des ' . $this->nom_elt;
			$data['breadcrumbs']	= array($this->link_list, $this->nom_elt , @$data['title']);

		// var_dump( $data['all_data'] );
		$data['contents']		= 'v_bo_candidats/v_candidats_liste'; //CHARGER la vue courrante
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
		$this->form_validation->set_rules('code_agent'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('libelle'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('email'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('numero'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('adresse'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('description'		, 'Champ', 'xss_clean|trim');
		// $this->form_validation->set_rules('date_naiss'		, 'Champ', 'xss_clean|trim');
		// $this->form_validation->set_rules('lieu_naiss'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('etat'		, 'Champ', 'xss_clean|trim');

		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');
		
		if ($this->form_validation->run() === FALSE) 
		{
			$data['contents']	= 'v_bo_candidats/v_candidat_form_add';
		} else{
			$nombre_aleatoire = rand(100000, 999999);
			$email = $this->input->post('email');
			$libelle = $this->input->post('libelle');
			$data_to_insert 	= array(

				'code_agent' 			=> $this->input->post('code_agent'),
				'libelle'		=> $this->input->post('libelle'),
				'email'	 	=> $this->input->post('email'),
				'numero'		=> $this->input->post('numero'),
				'adresse'	 	=> $this->input->post('adresse'), //attention pb etat statut dans la vue
				'description' 			=> $this->input->post('description'),
				'etat'	 	=> $this->input->post('etat'),
				'date_creation'		=> date('Y-m-d'),
				'id_type_profil' 	=> 2,
				'commentaires'		=> 'ecole',
				'pasword'		=> $nombre_aleatoire,
				'id_site'		=> 3,

			);
			$result_add = $this->M_ecole->insert($data_to_insert);
			if ($result_add) //si insertion avec succés on redirige
			{
				$subject = "Compte Valider";
					$message="
						<!DOCTYPE html>
						<html>
						<head>
						<meta charset='UTF-8'>
						<meta name='viewport' content='width=device-width, initial-scale=1.0'>
						</head>
						<body>
						<center><h1><b>Inscription Reussie Campus Afrique</b></h1></center><br>
						<h4>Hello <br/> L'etablissement $libelle a creer un compte avec succe</h4>
						<h5>Voici vos mots de passe par Defeaut: <b>$nombre_aleatoire</b> </h5>
						<p>Merci de cliquer sur ce lien:
						<a href='http://localhost/campus-afrique/connexion/'>
						http://localhost/campus-afrique/connexion/
						</a>
						  </p>
						<img src='assets/img/profile-img.jpg' alt='Profile' >
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
							//'charset' => 'iso-8859-1',  $config['charset']   = 'utf-8';
							$config['mailtype']  = 'html',
							'wordwrap' => TRUE
						
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
							redirect('liste-Etablissement');	
						}
						else
							demba_debug("erreur envoi email");

				
			}
		}
		$this->load->view('template/layout', $data);
	}

	// modifier une ecole
	public function edit_ecole(){
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');

		// les champs a controller 
		$this->form_validation->set_rules('logo'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('libelle'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('adresse'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('numero'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('email'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('description'	, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('lien_site'	, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('etat'		, 'Champ', 'xss_clean|trim');
		
		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');
		
		if($this->form_validation->run() === FALSE) 
		{
			redirect('profil-buur');
		} else{
			$id = $this->session->can8_g1qsu_30q9o['id'];
			$num_img     = $this->input->post('logo');
			$valueImage = $_FILES['logo']['name']; // {bj} valeur de l'image
				$photo_name = 'profilEcole_'.$id.'__'.$num_img;
				$tab_img        = explode('.',$_FILES['logo']['name']);
				$img_extension  = end($tab_img);
				$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'pdf' , 'docx');
				$data['valides']=$extensions_valides;
				
				if (!in_array($img_extension, $extensions_valides)) {
					var_dump('error');
				}else{
					
					$location       = $this->url_img.$photo_name.'.'.$img_extension;
					if(move_uploaded_file($_FILES['logo']['tmp_name'],$location))
					{
						// var_dump( $photo_name.'.'.$img_extension);
						echo $photo_name.'.'.$img_extension;
					}
				}
			
			$data_to_updata 	= array(
				'libelle'		=> $this->input->post('libelle'),
				'email'	 	=> $this->input->post('email'),
				'numero'		=> $this->input->post('numero'),
				'adresse'	 	=> $this->input->post('adresse'), //attention pb etat statut dans la vue
				'description' 			=> $this->input->post('description'),
				'etat'	 	=>     $this->input->post('etat'),
				'lien_site'	 	=>     $this->input->post('lien_site'),
				'date_lastmotif'		=> date('Y-m-d'),
			);

			if ($valueImage && $photo_name != '' ) {
				$data_to_updata['logo'] = $photo_name . '.' . $img_extension;
			}

			// var_dump($data_to_updata);
			$result_add = $this->M_ecole->update($data_to_updata, $id);
			if ($result_add) //si insertion avec succés on redirige
			{
				$fullName = $this->input->post('prenom').' '.$this->input->post('nom');
				$datas_user = $this->session->can8_g1qsu_30q9o;
				if ($fullName) {
				$datas_user['_the_name'] = $fullName;
				}
				if ($valueImage && $photo_name != '') {
				 $datas_user['logo'] = $photo_name.'.'.$img_extension;
				}
				//  var_dump($datas_user);
				 $this->session->set_userdata('can8_g1qsu_30q9o',$datas_user);
				redirect('profil-buur');
			}
		}

	}

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
			$data['date_one_element']		= $this->M_ecole->get_on_ecole($code_elt);
	
			//$id_site 						=  $data['date_one_element']['id_source'];
			//$data['date_one_element_val']	= $this->m_modele->get_data_entry_one_elt($code_elt, $id_site, $mois, $annee);
			$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, $data['title']);
			$data['contents']		= 'v_bo_ecole/v_ecole_show';
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
		$data['contents']		= 'v_bo_ecole/v_ecole_confirm_delete';
		$this->load->view('template/layout', $data);
	} //end on function

	
	function delete_one_elt()
	{ 
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$this->db->where('id', $code_elt);
		$this->db->delete('ecole');

		redirect('liste-Etablissement');
	} //end on function

	// pour modifier un mots de passe
	
	function edit_ecole_mdp(){
		$this->load->helper('security'); //pour controller les failes xss
	$this->load->helper('form');
	$this->load->library('form_validation');
	$id = $this->session->can8_g1qsu_30q9o['id']; // l'id de l'ecole

	// les champs a controller 
	$this->form_validation->set_rules('password'		, 'Champ', 'required|xss_clean|trim');
	$this->form_validation->set_rules('newpassword'		, 'Champ', 'required|xss_clean|trim');
	$this->form_validation->set_rules('renewpassword'	, 'Champ', 'required|xss_clean|trim');
	
	
	$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
	$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');
	
	if($this->form_validation->run() === FALSE) 
	{
		redirect('profil-buur');
	} else{
		$password = $this->input->post('password');
		$elm = $this->M_ecole->get_on_ecole($id);
		$newpassword = $this->input->post('newpassword');
		$renewpassword = $this->input->post('renewpassword');
		
		if($elm['pasword'] == $password && $newpassword == $renewpassword){
			$data_to_updata 	= array(
				'pasword'		=> $newpassword,
				'date_lastmotif'		=> date('Y-m-d'),
			);
			// var_dump($data_to_updata);
			$result_add = $this->M_ecole->update($data_to_updata, $id);
			if ($result_add) //si insertion avec succés on redirige
			{
			    $this->session->set_flashdata("success","mots de passe modifier");
				redirect('profil-buur');
			}
		}else{
			$this->session->set_flashdata("error","votre mots de passe est incorrecte");
			redirect('profil-buur');
		}
	}
}


}
?>