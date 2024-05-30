<?php
class M_Offres extends  MY_Model
{

   public $id=2;

   public function get_db_table()
   {
      return 'c_offres';
   }

   public function get_db_table_pk()
   {
      return 'id';
   }


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

   public function get_data_by_ecole($idEcole){
      return $this->db->select("
      p.id,c.libelle _categ_offre,p.id_categorie,p.libelle, p.description,p.date_publication,p.date_cloture, p.img_1, p.etat
        
         ")
        ->from('c_offres p')
        ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
        ->where('p.idEcole', $idEcole)
        ->get()
        ->result();
   }


   public function get_data_one_elt($id_elt)
   {
      return $this->db->select("
               p.id,c.libelle _categ_offre ,p.id_categorie,p.libelle, p.description,p.date_publication,p.date_cloture, p.img_1, p.etat,  
             p.text_details, p.montant_a_payer, e.libelle as nomEcole, e.logo, e.email, e.adresse, e.lien_site, ")
         ->from('c_offres p')
         ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->join('ecole AS e', 'e.id=p.idEcole', 'INNER')
         ->where('p.id', $id_elt)

         //order
         ->get()
         ->row_array();

      //result_array
   }

   /////////////////////SAVING
   function insert_one_element_principal($data)
   {
      return $this->db->insert('c_offres', $data);
   }

   /////////

   function update_one_s($id_val, $data)
   {
      //demba_debug($id_val);
      $this->db->where('id', $id_val);
      return $this->db->update('c_offres', $data);
   }

   function delete_one_off($id_val){
      $this->db->where('id', $id_val);
      $this->db->delete('c_offres');
      $query = $this->db->affected_rows();
      if($query >= 0){
         return true;
      }else{
         return false;
      }
   }
}
