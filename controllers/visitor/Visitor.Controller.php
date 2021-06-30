<?php

require_once("./controllers/MainController.controller.php");
require_once("./models/visitor/Visitor.Model.php");
require_once("./controllers/Security.class.php");


/**
 * 
 *@ Visitor.Controller
 */

class VisitorController extends MainController
{

    private  $visitorManager;

    public function __construct()
    {
        $this->visitorManager = new VisitorManager();
    }


    public function home()
    {
        $data_page = [
            "page_title" =>  "Page d'accueil",
            "page_description" => "Page d'accueil du site",
            "view" => "views/visitor/home.view.php",
            "template" => "views/common/template-visitor.php"
        ];
        $this->generatePage($data_page);
    }

    public function register()
    {
        $data_page = [
            "page_title" =>  "Inscription",
            "page_description" => "Page d'inscription'",
            "view" => "views/visitor/register.view.php",
            "template" => "views/common/template-visitor.php"
        ];
        $this->generatePage($data_page);
    }

    // user controller ?
    public function login()
    {
        $data_page = [
            "page_title" =>  "Connexion",
            "page_description" => "Page de connexion",
            "view" => "views/visitor/login.view.php",
            "template" => "views/common/template-visitor.php"
        ];
        $this->generatePage($data_page);
    }



    public function errorPage($msg)
    {
        parent::errorPage($msg);
    }
}
