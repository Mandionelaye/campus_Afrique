<?php

	function gen_code_agent($type='')
	{ 

		$current_year	= date('Y');
		$tab_year = array(
			'' => 'K',
			'2021' => 'L',
			'2022' => 'M',
			'2023' => 'N',
			'2024' => 'B',
			'2025' => 'C',
			'2026' => 'Y',
			'2027' => 'U',
			'2028' => 'I',
			'2029' => 'O',
		);		
		$part_1= $tab_year[$current_year];	

		$current_month	= date('m');
		$tab_month = array(
			'' => 'J',
			'01' => 'A',
			'02' => 'Z',
			'03' => 'E',
			'04' => 'R',
			'05' => 'T',
			'06' => 'Y',
			'07' => 'U',
			'08' => 'I',
			'09' => 'O',
			'10' => 'P',
			'11' => 'Q',
			'12' => 'S',
		);
		$part_2			= $tab_month[$current_month];
		$last_elt 	= get_last_code();//ex NU00000026

		$number 	= substr($last_elt,2,8); //ex NU00000026=>00000026
		$number 	= $number+1;
		//demba_debug($number);

		///////////
		if(strlen($number) == 1)
			$number = '0000000'.$number;
		else if(strlen($number) == 2)
			$number = '000000'.$number;
		else if(strlen($number) == 3)
			$number = '00000'.$number;
		else if(strlen($number) == 4)
			$number = '0000'.$number;
		else if(strlen($number) == 5)
			$number = '000'.$number;
		else if(strlen($number) == 6)
			$number = '00'.$number;
		else if(strlen($number) == 7)
			$number = '0'.$number;

		$last_char 	= date('i');
		$last_char 	= substr($last_char,1,1);
		$retour 	= $part_1.$part_2.$number.$last_char;
		//demba_debug($retour);
	//	$retour='NU00000026';
		return $retour;
	}



	function get_last_code()
	{
		$CI = get_instance();
		$sql = "SELECT `code_candidat` FROM `c_candidats` order by `id` desc limit 0,1 ";
		$query 	= $CI->db->query($sql);
		return $query->row_array()["code_candidat"];
	}


	function transform_url_for_link($chaine) 
	{
		$chaine = str_replace(array('é','é','è','ê'), 'e', $chaine);
		$chaine = str_replace(array('ç','ù'), 'c', $chaine);
		$chaine = str_replace(array('à'), 'a', $chaine);
		$chaine = str_replace(
			array('é',' ','!','#','&','"','?','_',':', '\\','\'', '/', '*', ',', '(', ')'), 
			'_', 
			$chaine);


		return $chaine;
	}