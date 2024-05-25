<?php
class M_profil extends  CI_Model
{

   public $id;


   public function get_data_liste($site_name)
   {
      return $this->db->select("
		c.*           

          ")
         ->from('sys_almustakhdam c')
        // ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('c.id_site',$site_name) 
        ->get()
        ->row_array();

      //result_array
   }

   public function get_data_liste_ecole($id)
   {
      return $this->db->select("
		c.*           

          ")
         ->from('ecole c')
        // ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('c.id',$id) 
        ->get()
        ->row_array();

      //result_array
   }

   public function get_data_liste_respon($id)
   {
      return $this->db->select("
		c.*           

          ")
         ->from('responsable_filiere c')
        // ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('c.id',$id) 
        ->get()
        ->row_array();

      //result_array
   }



  
	
}
