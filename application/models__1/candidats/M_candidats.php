<?php
class M_candidats extends  MY_Model
{

   public $id;

   public function get_db_table()
   {
      return 'c_candidats';
   }

   public function get_db_table_pk()
   {
      return 'id';
   }


   public function get_data_liste($id_site='')
   {
      return $this->db->select("
       p.*
         
          ")
         ->from('c_candidats p')
         //->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
		 ->order_by('p.etat','DESC')
         ->get()
         ->result();

      //result_array
   }


   public function get_data_one_elt($id_elt)
   {
      return $this->db->select("
            p.*

              ")
         ->from('c_candidats p')
         //->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('p.id', $id_elt)

         //order
         ->get()
         ->row_array();

      //result_array
   }


   //récupére totes des donnnées sur les candidats avec tous les détails nécessaires
   public function get_data_one_elt_all_det($code_cand)
   {
      return $this->db->select("
      p.id,  p.code_candidat,  p.prenom,  p.nom,  p.sexe
      ,  p.telephone,  p.email,  p.date_naiss,  c.cand_niveau_etude,  c.cand_experiences

              ")
         ->from('c_candidats p')
         ->join('c_candidats_details AS c', 'c.code_candidat=p.code_candidat', 'LEFT')
         ->where('p.code_candidat', $code_cand)

         //order
         ->get()
         ->row_array();

      //result_array
   }//en of the function


   //récupére totes des donnnées sur les candidats avec tous les détails nécessaires
   public function get_data_one_cand_all_diplomes($code_cand)
   {
      return $this->db->select("
            tble.*
              ")
         ->from('c_candidats_diplomes tble')
         ->join('lst_diplomes AS l', 'l.id=tble.id_type_diplome', 'INNER')
         ->where('tble.code_candidat', $code_cand)
         ->get()
         ->result_array();
   }//end of the function 


   //récupére totes des donnnées sur les candidats avec tous les détails nécessaires
   public function get_data_one_cand_all_experiences($code_cand)
   {
      return $this->db->select("
            tble.*
              ")
         ->from('c_candidats_experiences tble')
         ->join('lst_type_experiences AS l', 'l.id=tble.id_type_exp', 'INNER')
         ->where('tble.code_candidat', $code_cand)
         ->get()
         ->result_array();
   }//end of the function
   

   //récupére totes des donnnées sur les candidats avec tous les détails nécessaires
   public function get_data_one_cand_all_langues($code_cand)
   {
      return $this->db->select("
            tble.*,l.libelle _the_langague
               ")
         ->from('c_candidats_langues tble')
         ->join('lst_langues AS l', 'l.id=tble.id_langue', 'INNER')
         ->where('tble.code_candidat', $code_cand)
         ->get()
         ->result_array();
   }//end of the function


   public function get_data_one_cand_by_code($code_elt)
   {
      return $this->db->select("
            c.*
              ")
         ->from('c_candidats c')
         ->join('c_candidats_details AS d', 'd.code_candidat=c.code_candidat', 'LEFT')
         ->where('c.code_candidat', $code_elt)

         //order
         ->get()
         ->row_array();

      //result_array
   }

   /////////////////////SAVING
   function insert_one_element($data)
   {
      return $this->db->insert('c_candidats', $data);
   }

   /////////

   function update_one_s($id_val, $data)
   {
      //demba_debug($id_val);
      $this->db->where('id', $id_val);
      return $this->db->update('c_candidats', $data);
   }
}
