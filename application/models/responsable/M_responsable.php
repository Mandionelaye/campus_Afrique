<?php
class M_responsable extends  CI_Model
{
    // pour insere un responsable
    function insert_one_responsable($data){
        $this->db->insert("responsable_filiere",$data);
        if($this->db->affected_rows() >= 0){
            return true;
        }else{
            return false;
        }
    }
     
    // pour la connexion 
    public function get_resp($login, $pass){  
        // $this->db->where("email", $login);
        // $this->db->where("pasword", $pass);
        // $query = $this->db->get("ecole");
        $sql_ll = "
		SELECT u.id page_bidar_, CONCAT(UPPER(u.prenom), ' ',UPPER(u.nom)) AS user_conn, u.img_profil, u.idOffre
						,p.libelle_type_profil AS profil_name
						,p.id AS id_profil
						,u.id_site id_site
						,u.email email
						,u.id_site /*sit.libelle*/ _site_name
			FROM responsable_filiere u
			INNER JOIN sys_type_profil p ON (u.id_type_profil=p.id)
			
		";

		$sql_ll.="WHERE u.email=? AND  u.password=? AND u.etat='1' ";//merci de renseigner le mail dans la table agent sino cela ne marchera pas
			
	//demba_debug($sql_ll);							
		$query = $this->db->query($sql_ll,array($login,$pass));								
        $find_Resp=$query->row_array();
        if($find_Resp){
            return $find_Resp;
        }else{
            return null;
        }

    }

    function get_one_elm($id){
        $this->db->where("id",$id);
        $query=$this->db->get("responsable_filiere");
        return $query->row_array();
    }
    
//    pour afficher un responsable
    function get_one_elm_aff($idOffre){
      $this->db->where("idOffre",$idOffre);
      $query=$this->db->get("responsable_filiere");
        return $query->row_array();
    }

    // pour supprimer un responsable
    function delete_one_off($id_val){
        $this->db->where('id', $id_val);
        $this->db->delete('responsable_filiere');
        $query = $this->db->affected_rows();
        if($query >= 0){
           return true;
        }else{
           return false;
        }
     }

     public function update($data, $id){
        $this->db->where("id",$id);
        $this->db->update("responsable_filiere",$data);
        if($this->db->affected_rows() >= 0){
            return true;
        }else{
            return false;
        }

    }


}
?>