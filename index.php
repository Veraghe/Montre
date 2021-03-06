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
    require 'php/view/head.php';
    require 'php/view/header.php';
    require 'php/view/' . $chemin . '' . $nom . '.php';
    require 'php/view/footer.php';
}

DbConnect::init();
session_start();

if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "Accueil":
            AfficherPage("", "reception", "Accueil");
            break;
// Afficher les pages Connexion et deconnexion -----------------------------------
        case "FormConnexion":
            AfficherPage("", "FormConnexion", "Connexion");
            break;

        case "FormDeconnexion":
            AfficherPage("", "FormDeconnexion", "Deconnexion");
            break;
// Afficher les pages Admin et Clients + le formulaire ----------------------------
        case "AdminsList":
            AfficherPage("", "AdminsList", "Liste Admin");
            break;

        case "AdminsProfile":
            AfficherPage("", "AdminsProfile", "Profil Admin");
        break;

        case "CustomersList":
            AfficherPage("", "CustomersList", "Liste des clients");
            break;

        case "UserForm":
            AfficherPage("", "UserForm", "Utilisateur");
            break;
// Afficher les pages Article + le formulaire -------------------------------------
        case "ArticlesList":
            AfficherPage("", "ArticlesList", "Liste des articles");
            break;

        case "ArticlesListAdmin":
            AfficherPage("", "ArticlesListAdmin", "Liste des articles");
            break;

        case "ArticlesForm":
            AfficherPage("", "ArticlesForm", "Formulaire des articles");
            break;
        
        case "Articles":
            AfficherPage("", "Articles", "article");
            break;
// Afficher les pages Panier + le formulaire -------------------------------------
        case "BasketsList":
            AfficherPage("", "BasketsList", "Panier");
            break;

        case "BasketsForm":
            AfficherPage("", "BasketsForm", "Modifier son panier");
            break;
// Afficher les pages Commandes + le formulaire ------------------------------------
        case "OrdersList":
            AfficherPage("", "OrdersList", "Liste des commandes");
            break;

        case "OrdersForm":
            AfficherPage("", "OrdersForm", "Formulaire des commandes");
            break;
// Contact ------------------------------------
        case "Contact":
            AfficherPage("", "Contact", "Contact");
            break;
// Action ------------------------
        case "ArticlesAction":
            AfficherPage("", "ArticlesAction", "");
            break;

        case "OrdersAction":
            AfficherPage("", "OrdersAction", "");
        break;

        case "CustomersAction":
            AfficherPage("", "CustomersAction", "");
            break;

        case "BasketsAction":
            AfficherPage("", "BasketsAction", "");
            break;
           
        case "CustomersProfile":
            AfficherPage("", "CustomersProfile", "");
            break; 
        
        case "MdpForm":
            AfficherPage("", "MdpForm", "");
            break; 
    }
} else {
    AfficherPage("", "reception", "Accueil");
}
