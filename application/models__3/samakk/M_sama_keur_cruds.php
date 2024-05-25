<?php
class M_sama_keur_cruds extends  CI_Model
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


   
   ////////////////:diplomes
    public function get_data_liste_diplomes($code_candidat)
   {
      return $this->db->select("
      c.image,c.id,c.libelle,c.annee_obtention,d.libelle _type_diplome,c.date_creation,c.etat,c.lieu_obtention
         
          ")
         ->from('c_candidats_diplomes c')
         ->join('lst_diplomes AS d', 'd.id=c.id_type_diplome', 'INNER')
         ->where('code_candidat',$code_candidat)
         ->get()
         ->result();

      //result_array
   }
   

      ////////////////:diplomes
      public function get_data_one_diplome($id_diplom_candidat)
      {
         return $this->db->select("
         c.image,c.id,c.libelle,c.annee_obtention,d.libelle _type_diplome,c.date_creation,c.etat,c.lieu_obtention
            
             ")
            ->from('c_candidats_diplomes c')
            ->join('lst_diplomes AS d', 'd.id=c.id_type_diplome', 'INNER')
            ->where('c.id',$id_diplom_candidat)
            ->get()
            ->row_array();
   
         //result_array
      }

   function insert_one_candidat_diplome($data)
   {
      return $this->db->insert('c_candidats_diplomes', $data);
   }


   //////////////////////////////////
   ////////////////:experience
      public function get_data_liste_experiences($code_candidat)
      {
         return $this->db->select("
          c.id as id ,c.libelle,d.libelle _type_exp,c.date_debut,c.date_fin,c.date_creation,c.etat,c.entreprise_lieu,c.image
            
             ")
            ->from('c_candidats_experiences c')
            ->join('lst_type_experiences AS d', 'd.id=c.id_type_exp', 'INNER')
            ->where('c.code_candidat',$code_candidat)
            ->get()
            ->result();
   
         //result_array
      }

      function insert_one_candidat_experience($data)
      {
         return $this->db->insert('c_candidats_experiences', $data);
      }

      public function get_data_one_elt_experience($id_elt)
      {
         return $this->db->select("
                  c.*

                  ")
            ->from('c_candidats_experiences c')
            //->join('c_categorie_des_offres AS c', 'c.id=p.id_categorie', 'INNER')
            ->where('c.id', $id_elt)

            //order
            ->get()
            ->row_array();
      }

      function update_one_s($code_elt, $data)
      {
         //demba_debug($code_elt);
         $this->db->where('id', $code_elt);
         return $this->db->update('c_candidats_experiences', $data);
      }
   

   ////////////////:partie gestion des langues
   public function get_data_liste_langues($code_candidat)
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
         ->where('code_candidat', $code_candidat)
         ->get()
         ->result();
   }

   function insert_one_langue($data)
   {
      return $this->db->insert('c_candidats_langues', $data);
   }

   public function get_data_one_langue($id_elt)
   {

      return $this->db->select("l.id, l.date_creation, l.niveau,l.etat, lst.libelle the_label,l.id_op_saisie,l.date_last_modif
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
      ->where('l.id', $id_elt)
      ->get()
      ->result_array();


   }

   public function get_data_one_candidature($id_elt)
   {
      return $this->db->select("
               c.* , o.libelle _offre

               ")
         ->from('c_candidatures c')
         ->join('c_offres AS o', 'c.id_offre=o.id', 'INNER')
         ->where('c.id', $id_elt)

         //order
         ->get()
         ->row_array();
   }
   ////  gesiton des candidatures de la personne connectée
   public function get_data_liste_candidature($code_candidat)
   {
      return $this->db->select("
         c.id,o.libelle as _the_offer,o.description,c.montant_inscr
         ,c.date_creation,c.mode_paie,c.etat,c.code_depot         
          ")
         ->from('c_candidatures c')
         ->join('c_offres AS o', 'o.id=c.id_offre', 'INNER')
         ->where('c.code_candidat',$code_candidat)
         ->get()
         ->result();

      //result_array
   }
   



      ////////////////:partie gestion des offres
      public function get_data_liste_offre($code_candidat)
      {
         return $this->db->select("
         c.id,c.libelle,c.description,c.text_details,d.commentaires,c.date_publication,c.date_cloture,c.etat
            ,cand.code_depot
             ")
            ->from('c_offres c')
            ->join('c_categorie_des_offres AS d', 'd.id=c.id_categorie', 'INNER')
            ->join('c_candidatures AS cand', 'cand.id_offre=c.id', 'LEFT')
            ->get()
            ->result();
   
         //result_array
      }




      /////////////////:gestion partie pieces
		  public function get_data_liste_pieces($id_elt)
        {
          return $this->db->select("
              d.email ,d.prenom,d.nom
              ,p.tel_2,p.email_2,d.adresse,p.cni,p.passport,p.extrait_naissance
               , p.cand_niveau_etude , p.cand_experiences
                ")
            ->from('c_candidats d')
            ->join('c_candidats_details AS p', 'd.code_candidat=p.code_candidat', 'LEFT')
            ->where('d.code_candidat', $id_elt)

            //order
            ->get()
            ->row_array();

          //result_array
        }
      
       //////////////////show
      public function get_data_one_details($code_elt)
      {         
         return $this->db->select("
            *
               ")
         ->from('c_candidats_details ')
         ->where('code_candidat',$code_elt)
         ->get()
         ->row_array();
      }

}//fin de la classe
