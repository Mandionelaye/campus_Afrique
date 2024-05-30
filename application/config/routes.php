<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
    | -------------------------------------------------------------------------
    | URI ROUTING
    | -------------------------------------------------------------------------
    | This file lets you re-map URI requests to specific controller functions.
    |
    | Typically there is a one-to-one relationship between a URL string
    | and its corresponding controller class/method. The segments in a
    | URL normally follow this pattern:
    |
    |	example.com/class/method/id/
    |
    | In some instances, however, you may want to remap this relationship
    | so that a different class/function is called than the one
    | corresponding to the URL.
    |
    | Please see the user guide for complete details:
    |
    |	https://codeigniter.com/user_guide/general/routing.html
    |
    | -------------------------------------------------------------------------
    | RESERVED ROUTES
    | -------------------------------------------------------------------------
    |
    | There are three reserved routes:
    |
    |	$route['default_controller'] = 'welcome';
    |
    | This route indicates which controller class should be loaded if the
    | URI contains no data. In the above example, the "welcome" class
    | would be loaded.
    |
    |	$route['404_override'] = 'errors/page_missing';
    |
    | This route will tell the Router which controller/method to use if those
    | provided in the URL cannot be matched to a valid route.
    |
    |	$route['translate_uri_dashes'] = FALSE;
    |
    | This is not exactly a route, but allows you to automatically route
    | controller and method names that contain dashes. '-' isn't a valid
    | class or method name character, so it requires translation.
    | When you set this option to TRUE, it will replace ALL dashes in the
    | controller and method URI segments.
    |
    | Examples:	my-controller/index	-> my_controller/index
    |		my-controller/my-method	-> my_controller/my_method
*/

    $route['default_controller']    = 'Welcome/big_home';
    $route['404_override']          = 'Custom404';
    //$route['translate_uri_dashes']  = FALSE; 

    //$route['infos_utiles/([A-Za-z0-9-]+)']        = 'C_gest_info_utiles/list_by_category/$1';

    //
    //Liste  des éléments du front-office en premier d'abrd
    //
    $route['en-cours']                                  = 'Accueil/ongoing';
    $route['bienvenu']                                  = 'Welcome/big_home';
    $route['contacts']                                  = 'Welcome/contact';

    //$route['visualiser-details-offre/([A-Za-z0-9-]+)']  = 'front_office/Accueil_fr/show_details_one_offre';
    $route['visualiser-details-offre']                  = 'front_office/Accueil_fr/show_details_one_offre';
    $route['visualiser-toutes-les-offres']              = 'front_office/Accueil_fr/list_all_offers_front';

    $route['creer-son-compte']              = 'sama_keur/C_Login_comptes/create_account';
    $route['creer-son-compte-chek-email']   = 'sama_keur/C_Login_comptes/show_message_ok_create_account';
    $route['acceder-a-son-espace']          = 'sama_keur/C_Login_comptes/se_connecter';
    $route['v-enter-my-space']              = 'sama_keur/C_Login_comptes/verif_conn';
    $route['v-enter-my-space1']             = 'sama_keur/C_Login_comptes/verif_mdp';
    $route['erreur-connexion-login']        = 'sama_keur/C_Login_comptes/show_message_error_email'; 
    $route['dial-thi-thiaby']               = 'sama_keur/C_Login_comptes/check_mdp';

    $route['mon-profil']                    = 'sama_keur/C_mon_espace/profil';

    //change mdp
    $route['wethio-thiabi']             = 'sama_keur/C_mon_espace/change_password';
    $route['verif-wethio-thiabi']       = 'sama_keur/C_mon_espace/verif_wethio_thiabi';
    $route['verif-wethio-thiabi1']       = 'sama_keur/C_mon_espace/verif_wethio_thiabi1'; // {bj} pour le candidat
    $route['erreur-change-mdp']         = 'sama_keur/C_mon_espace/show_message_error_mdp'; 
    $route['success-change-mdp']        = 'sama_keur/C_mon_espace/show_message_ok_change_mdp'; 


    $route['mon-espace']                    = 'sama_keur/C_mon_espace/dashboard';

    $route['liste-des-pieces']              = 'sama_keur/C_mon_espace_pieces/list_pieces';
	$route['modifier-pieces']   			= 'sama_keur/C_mon_espace_pieces/edit_one_element';

    $route['liste-des-diplomes']                        = 'sama_keur/C_mon_espace_diplomes/list_diplomes';
    $route['ajouter-un-diplome']                        = 'sama_keur/C_mon_espace_diplomes/ajouter_un_diplome';
    $route['resize-un-diplome']                        = 'sama_keur/C_mon_espace_diplomes/redimensionner_images';

    $route['supprimer-un-diplome/([A-Za-z0-9-]+)']      = 'sama_keur/C_mon_espace_diplomes/supprimer_un_diplome/$1';
    $route['liste-des-candidatures']                    = 'sama_keur/C_mon_espace_candidature/list_candidature';
    $route['traiter-fichier-diplomes']                  = 'sama_keur/C_mon_espace_diplomes/add_files';
    $route['supprimer-image-diplome/([A-Za-z0-9-]+)']   = 'sama_keur/C_mon_espace_diplomes/delete_one_file_confirm/$1';
    $route['supprimer-image-diplome-ok/([A-Za-z0-9-]+)']= 'sama_keur/C_mon_espace_diplomes/delete_one_file_confirm_ok/$1';
    $route['supprimer-une-candidature/([A-Za-z0-9-]+)']      = 'sama_keur/C_mon_espace_candidature/supprimer_une_candidature/$1';

    
       
	$route['liste-des-langues']                         = 'sama_keur/C_mon_espace_langues/list_langues';
	$route['ajouter-une-langue']                        = 'sama_keur/C_mon_espace_langues/ajouter_une_langue';
    $route['supprimer-une-langue/([A-Za-z0-9-]+)']      = 'sama_keur/C_mon_espace_langues/supprimer_une_langue/$1';
	$route['details-langues/([A-Za-z0-9-]+)']           = 'sama_keur/C_mon_espace_langues/show_one_elt/$1';
    
    $route['liste-des-experiences']                      = 'sama_keur/C_mon_espace_experiences/list_experiences';
    $route['supprimer-une-experience/([A-Za-z0-9-]+)']   = 'sama_keur/C_mon_espace_experiences/supprimer_une_experience/$1';
    $route['traiter-fichier-experience']                  = 'sama_keur/C_mon_espace_experiences/add_files';
    $route['supprimer-image-exp/([A-Za-z0-9-]+)']   = 'sama_keur/C_mon_espace_experiences/delete_one_file_confirm/$1';
    $route['supprimer-image-exp-ok/([A-Za-z0-9-]+)']= 'sama_keur/C_mon_espace_experiences/delete_one_file_confirm_ok/$1';
    
	$route['candidat-liste-des-offres']                 = 'sama_keur/C_mon_espace_offre/list_offre';
    
    $route['verifier-depot-candidature/([A-Za-z0-9-]+)']    = 'sama_keur/C_mon_espace_candidatures_depot/verifier_mon_depot/$1';
    $route['valider-ma-candidature/([A-Za-z0-9-]+)']        = 'sama_keur/C_mon_espace_candidatures_depot/validate_my_candidature/$1';
    $route['infos-apres-depot']                             = 'sama_keur/C_mon_espace_candidatures_depot/message_aleady_done';
    $route['infos-depot-message']                           = 'sama_keur/C_mon_espace/show_infos';
    $route['params-details-ma-candidature/([A-Za-z0-9-]+)'] = 'sama_keur/C_mon_espace_candidature/show_one_candidature/$1';

    





// Pour l'ecole
    $route['connexion']                   = 'ecoles/C_connexion_ecole/connexionEcole';
    $route['verif-connexion-ecole']           = 'C_connexions/verif_connexion_ecole';
    $route['edit_ecole']                   = 'ecoles/c_ecole/edit_ecole';
    $route['modif_ecole_mdp']                   = 'ecoles/c_ecole/edit_ecole_mdp';

// pour le responsable
    $route['connexion_resp']                   = 'responsable/C_connexion_responsable/connexion_resp';
    $route['add_responsable/([A-Za-z0-9-]+)']    = 'responsable/C_responsable/add_responsable/$1';
    $route['edit_respon']                          = 'responsable/C_responsable/edit_respon';
    $route['delete_responsable/([A-Za-z0-9-]+)']    = 'responsable/C_responsable/delete_Responsable/$1';
    $route['verif-connexion-respon']           = 'C_connexions/verif_connexion_respon';
    $route['edit_resp_mdp']                   = 'responsable/C_responsable/edit_resp_mdp';


// ///////////
    $route['sign-in']                   = 'Welcome/index';
    $route['verif-connexion']           = 'C_connexions/verif_connexion';
    $route['se-deconnecter']            = 'C_connexions/se_deconnecter';
    $route['back-office']              = 'Accueil/home';
    $route['profil-buur']              = 'Accueil/profil_admin';

    $route['liste/([A-Za-z0-9-]+)']     = 'perfplusfrmk/C_sama_list/index/$1';


	/////////////////////:params
	$route['liste-offres']                    = 'offres/C_Offres/index';
    $route['offre-details/([A-Za-z0-9-]+)']   = 'offres/C_Offres/show_one_elt/$1';
    $route['offre-ajouter']                   = 'offres/C_Offres/add_one_element';
    $route['offre-edite/([A-Za-z0-9-]+)']     = 'offres/C_Offres/edit_offre/$1';
    $route['offre-delete/([A-Za-z0-9-]+)']     = 'offres/C_Offres/delete_offre/$1';


    ///
	$route['params-liste-pays']                     = 'params/C_par_pays/index';
    $route['params-ajouter-pays']                   = 'params/C_par_pays/add_one_element';
    $route['params-modifier-pays/([A-Za-z0-9-]+)']  = 'params/C_par_pays/edit_one_elt/$1';
    $route['params-details-pays/([A-Za-z0-9-]+)']   = 'params/C_par_pays/show_one_elt/$1';
    $route['params-supprimer-pays/([A-Za-z0-9-]+)'] = 'params/C_par_pays/confirm_delete_one_elt/$1';
    $route['params-supprimer-pays-ok/([A-Za-z0-9-]+)'] = 'params/C_par_pays/delete_one_elt/$1';

	$route['params-liste-pieces']                     = 'params/C_types_pieces/index';
    $route['params-ajouter-pieces']                   = 'params/C_types_pieces/add_one_element';
    $route['params-modifier-pieces/([A-Za-z0-9-]+)']  = 'params/C_types_pieces/edit_one_elt/$1';
    $route['params-details-pieces/([A-Za-z0-9-]+)']   = 'params/C_types_pieces/show_one_elt/$1';
    $route['params-supprimer-pieces/([A-Za-z0-9-]+)'] = 'params/C_types_pieces/confirm_delete_one_elt/$1';
    $route['params-supprimer-pieces-ok/([A-Za-z0-9-]+)'] = 'params/C_types_pieces/delete_one_elt/$1';

//babacar
////
    $route['params-liste-diplomes']                     = 'params/C_par_diplomes/index';
    $route['params-ajouter-diplomes']                   = 'params/C_par_diplomes/add_one_element';
    $route['params-details-diplomes/([A-Za-z0-9-]+)']   = 'params/C_par_diplomes/show_one_elt/$1';

    $route['params-liste-localites']                     = 'params/C_par_localites/index';
    $route['params-ajouter-localite']                   = 'params/C_par_localites/add_one_element';
    $route['params-details-localites/([A-Za-z0-9-]+)']   = 'params/C_par_localites/show_one_elt/$1';

    $route['params-liste-langues']                     = 'params/C_par_langues/index';
    $route['params-ajouter-langue']                   = 'params/C_par_langues/add_one_element';
    $route['params-details-langue/([A-Za-z0-9-]+)']   = 'params/C_par_langues/show_one_elt/$1';

//liux sn
	$route['params-liste-lieux']                     = 'params/C_par_lieux/index';
    $route['params-ajouter-lieux']                   = 'params/C_par_lieux/add_one_element';
    $route['params-modifier-lieux/([A-Za-z0-9-]+)']  = 'params/C_par_lieux/edit_one_elt/$1';
    $route['params-details-lieux/([A-Za-z0-9-]+)']   = 'params/C_par_lieux/show_one_elt/$1';
    $route['params-supprimer-lieux/([A-Za-z0-9-]+)'] = 'params/C_par_lieux/confirm_delete_one_elt/$1';
    $route['params-supprimer-lieux-ok/([A-Za-z0-9-]+)'] = 'params/C_par_lieux/delete_one_elt/$1';

    $route['params-liste-experiences']                     = 'params/C_type_experiences/index';
    $route['params-ajouter-experiences']                   = 'params/C_type_experiences/add_one_element';
    $route['params-modifier-experiences/([A-Za-z0-9-]+)']  = 'params/C_type_experiences/edit_one_elt/$1';
    $route['params-details-experiences/([A-Za-z0-9-]+)']   = 'params/C_type_experiences/show_one_elt/$1';
    $route['params-supprimer-experiences/([A-Za-z0-9-]+)'] = 'params/C_type_experiences/confirm_delete_one_elt/$1';
    $route['params-supprimer-experiences-ok/([A-Za-z0-9-]+)'] = 'params/C_type_experiences/delete_one_elt/$1';


	$route['liste-Etablissement']                     = 'ecoles/c_ecole/index';
    $route['ajouter-Etablissement']                   = 'ecoles/c_ecole/add_one_element';
    $route['modifier-candidat/([A-Za-z0-9-]+)']  = 'candidats/C_candidats/edit_one_elt/$1';
    $route['details-candidat/([A-Za-z0-9-]+)']   = 'candidats/C_candidats/show_one_elt/$1';
    $route['supprimer-candidat/([A-Za-z0-9-]+)'] = 'candidats/C_candidats/confirm_delete_one_elt/$1';
    $route['supprimer-candidat-ok/([A-Za-z0-9-]+)'] = 'candidats/C_candidats/delete_one_elt/$1';

    $route['liste-des-experiences']                      = 'sama_keur/C_mon_espace_experiences/list_experiences';
    $route['ajouter-une-experience']                        = 'sama_keur/C_mon_espace_experiences/ajouter_une_experience';
    $route['params-details-experiences/([A-Za-z0-9-]+)']   = 'sama_keur/C_mon_espace_experiences/show_one_elt/$1';
    $route['params-supprimer-experience/([A-Za-z0-9-]+)'] = 'sama_keur/C_mon_espace_experiences/confirm_delete_one_elt/$1';
    $route['params-supprimer-experience-ok/([A-Za-z0-9-]+)'] = 'sama_keur/C_mon_espace_experiences/delete_one_elt/$1';
    $route['params-modifier-experience/([A-Za-z0-9-]+)']  = 'sama_keur/C_mon_espace_experiences/edit_one_elt/$1';
 













   //// candidatures back office
$route['liste-candidatures']                     = 'candidatures/C_candidatures/index';
$route['supprimer-candidature/([A-Za-z0-9-]+)'] = 'candidatures/C_candidatures/confirm_delete_one_elt/$1';
$route['details-candidature/([A-Za-z0-9-]+)']   = 'candidatures/C_candidatures/show_one_elt/$1';
$route['ajouter-candidature']                   = 'candidatures/C_candidatures/add_one_element';
$route['supprimer-candidature-ok/([A-Za-z0-9-]+)'] = 'candidatures/C_candidatures/delete_one_elt/$1';
$route['rejet-candidature/([A-Za-z0-9-]+)']   = 'candidatures/C_candidatures/rejet/$1';
$route['presel-candidature/([A-Za-z0-9-]+)']   = 'candidatures/C_candidatures/retenu/$1';
$route['concour-candidature/([A-Za-z0-9-]+)']   = 'candidatures/C_candidatures/concour/$1';
$route['test-candidature/([A-Za-z0-9-]+)']   = 'candidatures/C_candidatures/test/$1';

$route['voir-profil-du-candidat/([A-Za-z0-9-]+)'] = 'candidatures/C_candidatures/profil_candidat/$1';

    /////////sys
    $route['liste-utilisateurs']                    = 'sys/C_sys_niits/index';
    $route['ajouter-utilisateur']                   = 'sys/C_sys_niits/add_one_element';
    $route['modifier-utilisateur/([A-Za-z0-9-]+)']  = 'sys/C_sys_niits/edit_one_elt/$1';
    $route['details-utilisateur/([A-Za-z0-9-]+)']   = 'sys/C_sys_niits/show_one_elt/$1';
    $route['supprimer-utilisateur/([A-Za-z0-9-]+)'] = 'sys/C_sys_niits/delete_one_elt/$1';
    $route['liste-profils']                    = 'sys/C_sys_profils/index';
    $route['ajouter-profil']                   = 'sys/C_sys_profils/add_one_element';
    $route['modifier-profil/([A-Za-z0-9-]+)']  = 'sys/C_sys_profils/edit_one_elt/$1';
    $route['details-profil/([A-Za-z0-9-]+)']   = 'sys/C_sys_profils/show_one_elt/$1';
    $route['supprimer-profil/([A-Za-z0-9-]+)'] = 'sys/C_sys_profils/delete_one_elt/$1';
	$route['params-liste-menu']                     = 'sys/C_sys_menu/index';
	$route['params-ajouter-menu']                   = 'sys/C_sys_menu/add_one_element';
	$route['params-modifier-menu/([A-Za-z0-9-]+)']  = 'sys/C_sys_menu/edit_one_elt/$1';
	$route['params-details-menu/([A-Za-z0-9-]+)']   = 'sys/C_sys_menu/show_one_elt/$1';
	$route['params-supprimer-menu/([A-Za-z0-9-]+)'] = 'sys/C_sys_menu/delete_one_elt/$1';
	$route['params-liste-smenu']                     = 'sys/C_sys_smenu/index';
	$route['params-ajouter-smenu']                   = 'sys/C_sys_smenu/add_one_element';
	$route['params-modifier-smenu/([A-Za-z0-9-]+)']  = 'sys/C_sys_smenu/edit_one_elt/$1';
	$route['params-details-smenu/([A-Za-z0-9-]+)']   = 'sys/C_sys_smenu/show_one_elt/$1';
	$route['params-supprimer-smenu/([A-Za-z0-9-]+)'] = 'sys/C_sys_smenu/delete_one_elt/$1';
	
	$route['attribuer-roles/([A-Za-z0-9-]+)'] = 'sys/C_sys_profils/get_menu_liste/$1';

    $route['mon-cv']                    = 'sama_keur/C_mon_espace/sama_cv';


    $route['mon-profil']                    = 'sama_keur/C_mon_espace/profil';
    $route['edit_mon_profile']                    = 'sama_keur/C_mon_espace/edit_mon_profile';
    $route['faq-smk']                    = 'sama_keur/C_mon_espace/faq_smk';
    $route['traiter-fichier-photo-profil']                  = 'sama_keur/C_mon_espace/add_files';
    $route['supprimer-image-photo-profil-ok/([A-Za-z0-9-]+)']= 'sama_keur/C_mon_espace/delete_one_file_confirm_ok/$1';


    /////////////////////////////

    $route['supprimer-image-pieces/([A-Za-z0-9-]+)']   = 'sama_keur/C_mon_espace_pieces/delete_one_file_confirm/$1';
    $route['supprimer-image-pieces-ok/([A-Za-z0-9-]+)']= 'sama_keur/C_mon_espace_pieces/delete_one_file_confirm_ok/$1';
    $route['traiter-fichier-pieces']                  = 'sama_keur/C_mon_espace_pieces/add_files';


    ///////////////////////////////

    $route['download'] = 'candidatures/Download/downloadMultipleFiles';
