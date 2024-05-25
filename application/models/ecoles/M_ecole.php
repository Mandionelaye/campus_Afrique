<?php
class M_ecole extends  CI_Model
{

    // afficher tout les ecoles
    public function affiEcolle(){
        $query = $this->db->get("ecole");
        return $query->result_array(); 
    }

    public function insert($data){
        $this->db->insert("ecole",$data);
        if($this->db->affected_rows() >= 0){
            return true;
        }else{
            return false;
        }
    }

    public function get_ecole($login, $pass){  
        // $this->db->where("email", $login);
        // $this->db->where("pasword", $pass);
        // $query = $this->db->get("ecole");
        $sql_ll = "
		SELECT u.id page_bidar_, u.libelle AS user_conn, u.logo
						,p.libelle_type_profil AS profil_name
						,p.id AS id_profil
						,u.id_site id_site
						,u.email email
						,u.id_site /*sit.libelle*/ _site_name
			FROM ecole u
			INNER JOIN sys_type_profil p ON (u.id_type_profil=p.id)
			
		";

		$sql_ll.="WHERE u.email=? AND  u.pasword=? AND u.etat='actif' ";//merci de renseigner le mail dans la table agent sino cela ne marchera pas
			
	//demba_debug($sql_ll);							
		$query = $this->db->query($sql_ll,array($login,$pass));								
        $find_ecole=$query->row_array();
        var_dump($find_ecole);
        if($find_ecole){
            return $find_ecole;
        }else{
            return null;
        }

    }

    // get on ecole
    function get_on_ecole($id){
        $this->db->where("id",$id);
        $query = $this->db->get("ecole");
        return $query->row_array();
    }

    public function update($data, $id){
        $this->db->where("id",$id);
        $this->db->update("ecole",$data);
        if($this->db->affected_rows() >= 0){
            return true;
        }else{
            return false;
        }

    }
}