<?php
class C_responsable extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Global_bdd', 'gl_bdd'); 
		$this->load->model('responsable/M_responsable');
		$this->link_list 	= 'liste-offres';    //////////lien du breadcrumb envers la liste sera utilisé de maniére dynamique
		$this->nom_elt 		= 'offres';  ///nom de l'élément du CRUD courant qui sera affichée de manière dynamique
		$this->url_img = 'j0kimpl8ldq/logo/';
	}

    function index(){}

    function add_responsable(){
		$args 					= func_get_args();
		$code_elt 				= $args[0];
		$data['code_elt']		= $code_elt;
		
        $this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] 			= 'Formulaire ajout:' . $this->nom_elt;
		$idEcole = $this->session->can8_g1qsu_30q9o['id'];  // l'id de l'école connecter
		$libelleEcole = $this->session->can8_g1qsu_30q9o['nom'];
		$data['breadcrumbs']	= array($this->link_list, $this->nom_elt, @$data['title']);


		//definition des champs a controller
		$this->form_validation->set_rules('code_agent'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('nom'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('prenom'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('email'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('sex'		, 'Champ', 'required|xss_clean|trim');
		$this->form_validation->set_rules('observation'		, 'Champ', 'required|xss_clean|trim');
		// $this->form_validation->set_rules('description'		, 'Champ', 'xss_clean|trim');
		// $this->form_validation->set_rules('date_naiss'		, 'Champ', 'xss_clean|trim');
		// $this->form_validation->set_rules('lieu_naiss'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('etat'		, 'Champ', 'required|xss_clean|trim');

		$this->form_validation->set_message('required', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Champ obligatoire</b>');
		$this->form_validation->set_message('xss_clean', '<b style="color:#FF3333;font-size:9px;text-decoration:blink">Faille XSS ....</b>');
		
		if ($this->form_validation->run() === FALSE) 
		{
			$data['contents']	= 'v_prod_bo/v_responsable_form_add';
		} 
		else //si tout est ok
		{
                $nombre_aleatoire = rand(100000, 999999);
				$prenom = $this->input->post('prenom');
				$nom = $this->input->post('nom');
				$email = $this->input->post('email');
				$data_to_insert 	= array(

					'code_agent' 		=> $this->input->post('code_agent'),
					'nom'		 	=> $this->input->post('nom'),
					'prenom'	 	=> $this->input->post('prenom'),
					'sex' 		=> $this->input->post('sex'),
                    'email'		=> $this->input->post('email'),
					'observation'	=> $this->input->post('observation'),
					'etat'		 		=> $this->input->post('etat'), //attention pb etat statut dans la vue
					'date_creation'		=> date('Y-m-d'),

					'password'		=> $nombre_aleatoire,
				    'id_site'		=> 3,
					'id_type_profil' 	=> 3,
					'idEcole'       =>  $idEcole,
					'idOffre'       => $code_elt,
				);
				 $result_add = $this->M_responsable->insert_one_responsable($data_to_insert); //insertion des données code BD
                var_dump($result_add);

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
						<h4>Hello $prenom $nom <br/> L'etablissement $libelleEcole vient de vous creer un compte responsable sur Campus Afrique</h4>
						<h5>Voici vos mots de passe par Defeaut: <b>$nombre_aleatoire</b> </h5>
						<p>Merci de cliquer sur ce lien: <br/>
						<a href='http://localhost/campus-afrique/connexion_resp/'>
						http://localhost/campus-afrique/connexion_resp/ 
						</a>
						 </p>
						<img src='assets/img/profile-img.jpg' alt='img'>
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
							redirect('offre-details/'.$code_elt);	
						}
						else
							demba_debug("erreur envoi email");
					
				}
		}
		$this->load->view('template/layout', $data);
    } 

	// pour le profile++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	public function edit_respon(){
		$this->load->helper('security'); //pour controller les failes xss
		$this->load->helper('form');
		$this->load->library('form_validation');

		// les champs a controller 
		$this->form_validation->set_rules('logo'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('nom'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('prenom'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('adresse'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('numero'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('email'		, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('observation'	, 'Champ', 'xss_clean|trim');
		$this->form_validation->set_rules('sex'	, 'Champ', 'xss_clean|trim');
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
			$photo_name = 'profileRespon_'.$id.'__'.$num_img;
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

				'nom'		    => $this->input->post('nom'),
				'prenom'		=> $this->input->post('prenom'),
				'email'	 	    => $this->input->post('email'),
				'numero'		=> $this->input->post('numero'),
				'adresse'	 	=> $this->input->post('adresse'), //attention pb etat statut dans la vue
				'observation' 			=> $this->input->post('observation'),
				'etat'	 	=>     $this->input->post('etat'),
				'sex'	 	=>     $this->input->post('sex'),
				'date_lastmodif'		=> date('Y-m-d'),

			);
			if ($valueImage && $photo_name != '') {
				$data_to_updata['img_profil'] = $photo_name.'.'.$img_extension;
				 var_dump($data_to_updata);
			}
			// var_dump($data_to_updata);
			$result_add = $this->M_responsable->update($data_to_updata, $id);
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

	// pour modifier un mots de passe
	
	function edit_resp_mdp(){
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
		$elm = $this->M_responsable->get_one_elm($id);
		$newpassword = $this->input->post('newpassword');
		$renewpassword = $this->input->post('renewpassword');
		
		if($elm['password'] == $password && $newpassword == $renewpassword){
			$data_to_updata 	= array(
				'password'		=> $newpassword,
				'date_lastmodif'		=> date('Y-m-d'),
			);
			// var_dump($data_to_updata);
			$result_add = $this->M_responsable->update($data_to_updata, $id);
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

		// supprimer un responsable
		function delete_Responsable(){
			$args 					= func_get_args();
			$code_elt 				= $args[0];
			$data['code_elt']		= $code_elt;
	
			$result_add = $this->M_responsable->delete_one_off($code_elt);
			if ($result_add) {
				redirect($this->link_list);
			}else{
				$this->session->set_flashdata('error','la modification n\'est pas passer');
				redirect('offre-details'.$code_elt);
			}
		}

}