<?php
class M_Lieux extends  MY_Model
{

   public $id;

   public function get_db_table()
   {
      return 'par_lieux_sn';
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
         ->from('par_lieux_sn p')
         //->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
		 //->order_by('p.etat','DESC')
         ->get()
         ->result();

      //result_array
   }


   public function get_data_one_elt($id_elt)
   {
      return $this->db->select("
            p.*

              ")
         ->from('par_lieux_sn p')
         //->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('p.id', $id_elt)

         //order
         ->get()
         ->row_array();

      //result_array
   }

   /////////////////////SAVING
   function insert_one_element($data)
   {
      return $this->db->insert('par_lieux_sn', $data);
   }

   /////////

   function update_one_s($id_val, $data)
   {
      //demba_debug($id_val);
      $this->db->where('id', $id_val);
      return $this->db->update('par_lieux_sn', $data);
   }
}
