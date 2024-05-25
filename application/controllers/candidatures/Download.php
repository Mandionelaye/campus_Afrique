<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller {

    public function downloadMultipleFiles() {
        // Liste des fichiers à télécharger
        $files = array(
            'chemin/vers/fichier1.pdf',
            'chemin/vers/fichier2.jpg',
            'chemin/vers/fichier3.txt'
        );

        // Nom du fichier zip de sortie
        $zipFilename = 'fichiers_a_telecharger.zip';

        // Charger la bibliothèque Zip
        $this->load->library('zip');

        // Ajouter chaque fichier au fichier ZIP
        foreach ($files as $file) {
            $this->zip->read_file($file);
        }

        // Écrivez le fichier ZIP
        $this->zip->archive($zipFilename);

        // Forcez le téléchargement du fichier ZIP
        $this->zip->download($zipFilename);
    }
}
