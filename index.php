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
    require 'php/view/' . $chemin . '' . $nom . '.php';
    require 'php/view/footer.php';
}

DbConnect::init();
session_start();

if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "Accueil":
            AfficherPage("", "accueil", "Accueil");
            break;

        case "AdminsList":
            AfficherPage("", "AdminsList", "Liste Admin");
            break;

        case "ArticlesList":
            AfficherPage("", "ArticlesList", "Liste des articles");
            break;

        case "BasketsList":
            AfficherPage("", "BasketsList", "Panier");
            break;

        case "CustomersList":
            AfficherPage("", "CustomersList", "Liste des clients");
            break;

        case "OrdersList":
            AfficherPage("", "OrdersList", "Liste des commandes");
            break;
    }
} else {
    AfficherPage("", "accueil", "Accueil");
}
