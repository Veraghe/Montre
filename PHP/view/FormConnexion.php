<?php

$lvl = 0;

if (!isset($_POST['mailCustomer'])) // On est dans la page de formulaire
{
    require 'Php/View/HTMLConnexion.php'; // On affiche le formulaire
}
else
{ // Le formulaire a été validé
    $message = '';
    if (empty($_POST['mailCustomer']) || empty($_POST['passwordCustomer'])) // Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs</p>
	                   <p>Cliquez <a href="index.php?action=connect">ici</a> pour revenir</p>';
    }
    else if ($admin = AdminsManager::get($_POST['mailAdmin']) // On check le mot de passe
    {   
        
        if ($admin->getPasswordAdmin() == md5($_POST['passwordAdmin']))
        {
            if ($admin->getPasswordAdmin() == md5($_POST['passwordAdmin'])) // Acces OK !
            {
                $_SESSION['mailAdmin'] = $admin->getmailAdmin();
                // $_SESSION['level'] = $customer->getRole();
                //$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 1;
                $_SESSION['id'] = $admin->getIdAdmin();
                $message = '<p>Bienvenue ' . $admin->getmailAdmin() . ', vous êtes maintenant connecté!</p>';
            }
            else // Acces pas OK !
            {
                $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le l\'adresse mail entré n\'est pas correcte.</p>';
                header("refresh:3,url=index.php?action=connect");
            }
        }
    }
    else if ($customer = CustomersManager::get($_POST['mailCustomer'])
    {
        $lvl == 2;
            if ($customer->getPasswordCustomer() == md5($_POST['passwordCustomer'])) // Acces OK !
            {
                $_SESSION['mailCustomer'] = $customer->getmailCustomer();
                // $_SESSION['level'] = $customer->getRole();
                //$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 1;
                $_SESSION['id'] = $customer->getIdCustomer();
                $message = '<p>Bienvenue ' . $customer->getSurnameCustomer() . ', vous êtes maintenant connecté!</p>';
            }
            else // Acces pas OK !
            {
                $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le l\'adresse mail entré n\'est pas correcte.</p>';
                header("refresh:3,url=index.php?action=connect");
            }
    }
    else 
    {
        $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le l\'adresse mail entré n\'est pas correcte.</p>';
        header("refresh:3,url=index.php?action=connect");
    }
        
    if ($lvl==1 || $lvl==2)
    {
        header("refresh:3,url=index.php?action=accueil");
    }
    else 
    {
         header("refresh:3,url=index.php?action=CustomerListe");
    }   
               
}
echo $message;
