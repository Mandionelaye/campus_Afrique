<?php
class M_profil extends  CI_Model
{

   public $id;


   public function get_data_liste($code_candidat)
   {
      return $this->db->select("
		c.*           

          ")
         ->from('c_candidats c')
        // ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('c.code_candidat',$code_candidat) 
        ->get()
        ->row_array();

      //result_array
   }

   public function get_data_liste_candidature($code_candidat)
   {
      return $this->db->select("
       p.id,p.libelle _offre,c.date_last_modif dlm,p.date_cloture dc
          ")
         ->from('c_offres p')
         ->join('c_candidatures AS c', 'c.id_offre=p.id', 'INNER')
         ->where('c.code_candidat',$code_candidat) 
         ->get()
         ->result();
   }


  
	
}
