<?php
    function LoadClass($class)
    {
        if (file_exists("php/controller/" . $class . ".Class.php")) {
            require "php/controller/" . $class . ".Class.php";
        }

        if (file_exists("php/model/" . $class . ".Class.php")) {
            require "php/model/" . $class . ".Class.php";
        }

        if (file_exists("php/view/" . $class . ".Class.php")) {
            require "php/view/" . $class . ".Class.php";
        }

    }
    spl_autoload_register("LoadClass");

    function AfficherPage($chemin, $nom, $titre)
    {
        require 'php/view/header.php';
        require 'php/view/'.$chemin.''.$nom.'.php';
        require 'php/view/footer.php';
    }

    DbConnect::init();
    session_start();

    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case "Accueil":
                AfficherPage("", "accueil", "Accueil");
                break;
        }
    } 
    else {
        AfficherPage("", "accueil", "Accueil");
    }