<?php
class M_connexion_comptes extends  CI_Model
{

   public $id;



   public function get_data_liste()
   {
      return $this->db->select("
       p.id,c.libelle _categ_offre,p.id_categorie,p.libelle, p.description,p.date_publication,p.date_cloture, p.img_1, p.etat
         
          ")
         ->from('c_offres p')
         ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->get()
         ->result();

      //result_array
   }


   public function get_data_one_elt($id_elt)
   {
      return $this->db->select("
       p.id,c.libelle _categ_offre ,p.id_categorie,p.libelle, p.description,p.date_publication,p.date_cloture, p.img_1, p.etat

              ")
         ->from('c_offres p')
         ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('p.id', $id_elt)

         //order
         ->get()
         ->row_array();

      //result_array
   }

   /////////////////////SAVING
   function insert_one_element_principal($data)
   {
      return $this->db->insert('c_candidats', $data);
   }

   /////////

   function update_one_s($id_val, $data)
   {
      //demba_debug($id_val);
      $this->db->where('id', $id_val);
      return $this->db->update('c_offres', $data);
   }



   public function identification($login)
	{

		$sql_ll = " SELECT u.email email,u.etat FROM c_candidats u		";

		$sql_ll.="WHERE u.email=? ";//merci de renseigner le mail dans la table agent sino cela ne marchera pas
			
	//demba_debug($sql_ll);							
		$query = $this->db->query($sql_ll,array($login));								

		return $query->row_array();
	}



   public function identification_ok($login,$mdp)
	{

		$sql_ll = "
         SELECT u.id id,u.email email,u.etat ,u.code_candidat,CONCAT(u.prenom,' ',u.nom) _the_name
         FROM c_candidats u		
		";

		$sql_ll.="WHERE u.email=? AND u.dialoukay=?";//merci de renseigner le mail dans la table agent sino cela ne marchera pas
			
	//demba_debug($sql_ll);							
		$query = $this->db->query($sql_ll,array($login,$mdp));								

		return $query->row_array();
	}


   

}
