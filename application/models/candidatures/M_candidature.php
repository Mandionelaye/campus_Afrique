<?php
class M_candidature extends  MY_Model
{

   public $id;

   public function get_db_table()
   {
      return 'c_candidatures';
   }

   public function get_db_table_pk()
   {
      return 'id';
   }


   public function get_data_liste( $idOffre,$idEcole ,$id_site='')
   {
      // pour le responsable
      if($idOffre){
         return $this->db->select("
         p.id,p.code_depot, p.montant_inscr, p.cand_niveau_etude, p.mode_paie, p.etat, o.libelle _offre, c.code_candidat, o.montant_a_payer, c.prenom, c.nom
         
         ")
         ->from('c_candidatures p')
         ->join('c_offres AS o', 'o.id=p.id_offre', 'INNER')
         ->join('c_candidats AS c', 'c.code_candidat=p.code_candidat', 'INNER')
		   ->order_by('p.date_creation','DESC')
         ->where('p.id_offre', $idOffre)
         ->get()
         ->result();
      }elseif($idEcole){
         // pour l'ecole
         return $this->db->select("
         p.id,p.code_depot, p.montant_inscr, p.mode_paie, p.cand_niveau_etude, p.etat, o.libelle _offre, o.montant_a_payer, c.code_candidat, c.prenom, c.nom
         
         ")
         ->from('c_candidatures p')
         ->join('c_offres AS o', 'o.id=p.id_offre', 'INNER')
         ->join('c_candidats AS c', 'c.code_candidat=p.code_candidat', 'INNER')
		   ->order_by('p.date_creation','DESC')
         ->where('o.idEcole', $idEcole)
         ->get()
         ->result();
      }else{
         // pour le supper admin
         return $this->db->select("
         p.id,p.code_depot, p.montant_inscr, p.mode_paie, p.cand_niveau_etude, p.etat, o.libelle _offre, o.montant_a_payer, c.code_candidat, c.prenom, c.nom
         
         ")
         ->from('c_candidatures p')
         ->join('c_offres AS o', 'o.id=p.id_offre', 'INNER')
         ->join('c_candidats AS c', 'c.code_candidat=p.code_candidat', 'INNER')
		   ->order_by('p.date_creation','DESC')
         ->get()
         ->result();
      }

      //result_array
   }


   public function get_data_one_elt($id_elt)
   {
      return $this->db->select("
      p.id,p.code_depot, p.montant_inscr, p.mode_paie, p.etat,p.date_creation,p.cand_niveau_etude, o.libelle _offre, o.montant_a_payer, c.code_candidat, c.prenom, c.nom , p.montant_justif,
         c.prenom , c.nom, c.email, e.libelle as nomEcole
          ")
         ->from('c_candidatures p')
         ->join('c_offres AS o', 'o.id=p.id_offre', 'INNER')
         ->join('c_candidats AS c', 'c.code_candidat=p.code_candidat', 'INNER')
         ->join('ecole AS e', 'e.id=o.idEcole', 'INNER')
         ->where('p.id', $id_elt)

         //order
         ->get()
         ->row_array();

      //result_array
   }

   /////////////////////SAVING
   function insert_one_element($data)
   {
      return $this->db->insert('c_candidatures', $data);
   }


      /////////////////////SAVING from my space
      function insert_one_candidature_depuis_my_space($data)
      {
         return $this->db->insert('c_candidatures', $data);
      }

   /////////

   function update_one_s($id_val, $data)
   {
      //demba_debug($id_val);
      $this->db->where('id', $id_val);
      $this->db->update('c_candidatures', $data);
      
      if($this->db->affected_rows() >= 0){
         return true;
     }else{
         return false;
     }
   }


   //////////lors du dépot
   public function get_liste_pieces($id_elt)
   {
      return $this->db->select("
            p.*

              ")
         ->from('c_candidatures p')
         //->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
         ->where('p.id', $id_elt)

         //order
         ->get()
         ->row_array();

      //result_array
   }

   public function get_data_liste_experiences($code_elt)
   {
      return $this->db->select("
       c.id as id ,c.libelle,d.libelle _type_exp,c.date_debut,c.date_fin,c.date_creation,c.etat,c.entreprise_lieu,c.image
         
          ")
         ->from('c_candidats_experiences c')
         ->join('lst_type_experiences AS d', 'd.id=c.id_type_exp', 'INNER')
         ->join('c_candidatures AS p', 'p.code_candidat=c.code_candidat', 'INNER')
         ->where('p.id',$code_elt)
         ->get()
         ->result();

      //result_array
   }

   public function get_data_liste_langues($code_elt)
   {
      return $this->db->select("l.id, l.date_creation, l.niveau,l.etat, lst.libelle the_label
            ,CASE 
               WHEN lu='0' THEN '' ELSE 'lu' 
            end AS _lu
            ,CASE 
               WHEN parle='0' THEN '' ELSE 'parle' 
            end AS _parle
            ,CASE 
               WHEN ecrit='0' THEN '' ELSE 'ecrit' 
            end AS _ecrit
            ")
         ->from('c_candidats_langues l')
         ->join('lst_langues AS lst', 'lst.id=l.id_langue', 'INNER')
         ->join('c_candidatures AS p', 'p.code_candidat=l.code_candidat', 'INNER')
         ->where('p.id',$code_elt)
         ->get()
         ->result();
   }

   public function get_data_liste_diplomes($code_elt)
   {
      return $this->db->select("
      c.image,c.id,c.libelle,c.annee_obtention,d.libelle _type_diplome,c.date_creation,c.etat,c.lieu_obtention
         
          ")
         ->from('c_candidats_diplomes c')
         ->join('lst_diplomes AS d', 'd.id=c.id_type_diplome', 'INNER')
         ->join('c_candidatures AS p', 'p.code_candidat=c.code_candidat', 'INNER')
         ->where('p.id',$code_elt)
         ->get()
         ->result();

      //result_array
   }


   public function get_data_liste_autre_piece($code_elt)
   {
      return $this->db->select("
      c.image,c.id,c.libelle,c.annee_obtention,c.date_creation,c.etat,c.lieu_obtention
         
          ")
         ->from('c_candidats_autre_piece c')
         // ->join('lst_diplomes AS d', 'd.id=c.id_type_diplome', 'INNER')
         ->join('c_candidatures AS p', 'p.code_candidat=c.code_candidat', 'INNER')
         ->where('p.id',$code_elt)
         ->get()
         ->result();

      //result_array
   }
   
   public function get_data_liste_pieces($code_elt)
   {
     return $this->db->select("
         d.email ,d.prenom,d.nom
         ,p.tel_2,p.email_2,p.adresse,p.cni,p.passport,p.extrait_naissance

           ")
       ->from('c_candidats d')
       ->join('c_candidats_details AS p', 'd.code_candidat=p.code_candidat', 'LEFT')
       ->join('c_candidatures AS ca', 'ca.code_candidat=d.code_candidat', 'INNER')
       ->where('ca.id',$code_elt)

       //order
       ->get()
       ->row_array();

     //result_array
   }
 
   public function get_data_liste_cand($code_elt)
   {
      return $this->db->select("
		c.*           

          ")
         ->from('c_candidats c')
        // ->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
        ->join('c_candidatures AS p', 'p.code_candidat=c.code_candidat', 'INNER')
        ->where('p.id',$code_elt)
        ->get()
        ->row_array();

      //result_array
   }
}
