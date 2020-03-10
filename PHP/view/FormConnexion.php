<?php
//Mathys--------------------------------------------------
$lvl = "";
// var_dump($_POST['mail']);
if (!isset($_POST['mail']) || !isset($_POST['mail'])) // On est dans la page de formulaire
{
    require 'php/view/HTMLConnexion.php'; // On affiche le formulaire
}
else
{ // Le formulaire a été validé
    $message = '';
    if (empty($_POST['mail']) || empty($_POST['password'])) // Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs</p>
	                   <p>Cliquez <a href="index.php?action=FormConnexion">ici</a> pour revenir</p>';
    }
    else  // On check le mot de passe
    {   
        
        $user = CustomersManager::get($_POST['mail']);
        if ($user->getMail()==null) 
        {
            $user = AdminsManager::get($_POST['mail']); 
            $lvl=1;
        }
        else {
            $lvl=2;
        }
       
            if ($lvl==1 && $user->getPassword() == md5($_POST['password'])) // Acces OK !
            {
                $_SESSION['mail'] = $user->getMail();
                
                $_SESSION['idAdmin'] = $user->getIdAdmin();
                
                $message = '<p>Bienvenue vous êtes maintenant connecté!</p>'; 
                header("refresh:3,url=index.php?action=AdminsProfile");
                
                }
                elseif ($lvl==2 && $user->getPassword() == md5($_POST['password'])) // Acces OK !
                {
                    $_SESSION['mail'] = $user->getMail();
                    
                    $_SESSION['idCustomer'] = $user->getIdCustomer();
                    $_SESSION['nameCustomer'] = $user->getNameCustomer();
                    $_SESSION['surnameCustomer'] = $user->getSurnameCustomer();
                    $_SESSION['dobCustomer'] = $user->getDobCustomer();
                    $_SESSION['adresseCustomer'] = $user->getAdresseCustomer();
                    $_SESSION['cityCustomer'] = $user->getCityCustomer();
                    $_SESSION['postalCodeCustomer'] = $user->getPostalCodeCustomer();
                   
                    $message = '<p>Bienvenue vous êtes maintenant connecté!</p>'; 
                    header("refresh:3,url=index.php?action=Accueil");
                }
                
           else // Acces pas OK !
            {
                $message = '<p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le l\'adresse mail entré n\'est pas correcte.</p>';
                header("refresh:3,url=index.php?action=FormConnexion");
            }
    }

               

echo $message;
}

