<?php
require_once("controllers/Tools.class.php");

/**
 * @MainController
 * 
 * Permet de générer des pages dynamiquement, de personnaliser les entrées de fichiers.
 * $data_page:
 *      "page_title" =>  Titre de la page
 *      "page_description" => Description de la page
 *      "page_javascript" => Ajout dans un tableau de fichier JS spécifique à une page si besoin
 *      "page _css"=> Ajout dans un tableau de fichier CSS spécifique à une page si besoin 
 *      "view" => url de la vue (./views)
 *      "template" => url template  (./views/common)
 * 
 *  Appelle de la function generatePage avec le tableau renseigné en paramètre:
 *       $this->generatePage($data_page);      
 * 
 * 
 *      
 * Template: utiliser des template différents suivant les pages
 *              "template" => "views/common/template.php"
 *              "template_other" => "views/common/template_other.php"
 * 
 * 
 * GeneratePage
 * récupère les informations sous forme de tableau pour générer une page
 * Extract permet de récupérer des variables à partir du tableau $data_page
 */


abstract class MainController
{

    protected function generatePage($data)
    {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }


    protected function errorPage($msg)
    {
        $data_page = [
            "page_title" =>  "Page d'erreur",
            "page_description" => "Page d'affichage des erreurs",
            "view" => "views/error.view.php",
            "msg" => $msg,
            "template" => "views/common/template.php"
        ];
        $this->generatePage($data_page);
    }
}
