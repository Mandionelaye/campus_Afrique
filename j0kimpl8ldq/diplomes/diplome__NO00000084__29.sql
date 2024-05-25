

DELETE  FROM `dp_finan_paie_etudiants` ;
DELETE  FROM `dp_finan_paie_etudiants_init` ;
DELETE  FROM `dp_vie_scol_inscriptions` ;
DELETE  FROM `z_journal_paie_eleve` ;


	



	if(row._is_inscr==undefined  ||row._is_inscr=='0'  || row._is_inscr==null || row._is_inscr=='')
		linkss=linkss;
	else
		linkss=linkss+'<a href="imprimer-inscription/'+row.id+'" class="on-default" data-id="'+row.id+'"><i class="fa fa-print fa-lg"></i></a>';
		
		