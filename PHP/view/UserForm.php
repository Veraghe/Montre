<?php
if (empty($_POST['mail'])) // Si la variable est vide, on est sur la page de formulaire
{
$lvl='';
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $Customers = CustomersManager::findById($id);
}

echo'<section>       <!--CustomersForm.php --> <!--ProfileCustomer.php avec les differents champs remplis et un bouton en plus modif mdp-->
        <div class="center">
            <div class="formulaire">
                <form action="index.php?action=CustomersAction&m=' . $mode . '" method = POST>
                    <div> 
                        <label for="mail">Mail : </label>
                        <input type="mail" id="mail" name="mail" placeholder="Mail"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getMail() . '"';
                        }
    echo '         >
                    </div>';
                    if ($mode != "ajout")
                    {
                        echo ' <div> <input type="text" id="idCustomer" name="idCustomer" hidden value = "' . $Customers->getIdCustomer() . '"> </div>';
                    }

                    if ($mode == "ajout")
                    {
                    echo'<div> 
                        <label for="password">Mot de passe : </label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getPassword() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="confirm">Confirmation mot de passe : </label>
                        <input type="password" id="confirm" name="confirm" placeholder="Confirmer le mot de passe"  required >
                    </div>';}


    echo '              <div> 
                        <label for="nameCustomer">Nom : </label>
                        <input type="text" id="nom" name="nameCustomer" placeholder="Nom"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getNameCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="surnameCustomer">Prenom : </label>
                        <input type="text" id="prenom" name="surnameCustomer" placeholder="Prenom"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getSurnameCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="dobCustomer">Date de naissance : </label>
                        <input type="date" id="dob" name="dobCustomer" placeholder="Date de naissance"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getDobCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="adresseCustomer">Adresse : </label>
                        <input type="text" id="adresse" name="adresseCustomer" placeholder="Adresse"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getAdresseCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="cityCustomer">Ville : </label>
                        <input type="text" id="city" name="cityCustomer" placeholder="Ville"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getCityCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="postalCodeCustomer">Code postal : </label>
                        <input type="text" id="city" name="postalCodeCustomer" placeholder="Code postal"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $Customers->getPostalCodeCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div class="bouton">
                        <button class="bouton" id="submit" type="submit ">';
                        switch ($mode)
                        {
                            case "ajout":echo 'Ajouter';
                                break;
                            case "modif":echo 'Modifier';
                                break;
                            case "suppr":echo 'Supprimer';
                                break;
                        }
    echo '              </button>
                    <a class="btn" href="index.php?action=MdpForm&m=modifmdp&'.$id.'"> Modifier mot de passe</a>';

                        if ($lvl==1)
                        {
                            echo '<a class="btn" href="index.php?action=CustomersList"> Retour</a>';
                        }
                        else 
                        {
                            echo '<a class="btn" href="index.php?action=CustomersProfile"> Retour</a>';
                        }
     echo '               </div>
                    </div>
                </form>
        </div>
    </section>';
}

else //On est dans le cas traitement
{
    $mail_erreur1 = null;
    $mail_erreur2 = null;
    $mdp_erreur = null;
    //On récupère les variables
    $i = 0; // compte le nombre d'erreurs à afficher
    $temps = time();
    $mail=$_POST['mail'];
    $pass = md5($_POST['password']); // on hache le password avec md5
    $confirm = md5($_POST['confirm']);
   
    //Vérification du mail
    $utilisateur  = CustomersManager::get($mail);
    if ($utilisateur->getIdCustomer()!=null)
    {
        $mail_erreur1 = "Votre mail est déjà utilisé par un membre";
        $i++;
    }
    
    if (strlen($mail) < 3 || strlen($mail) > 15)
    {
        $mail_erreur2 = "Votre mail est soit trop grand, soit trop petit";
        $i++;
    }
    
    //Vérification du mdp
    if ($pass != $confirm || empty($confirm) || empty($pass))
    {
        $mdp_erreur = "Votre mot de passe et votre confirmation sont différents, ou sont vides";
        $i++;
    }
    
 
    if ($i==0) // S'il n'y a pas d'erreur
    {
    	$nouvelUtilisateur = new Customers(['mail'=>$_POST['mail'],'password'=>md5($_POST['password'])]);
        CustomersManager::add($nouvelUtilisateur); // On crée l'utilisateur dans la base
        $nouvelUtilisateur = CustomersManager::get($_POST['mail']); //pour récupérer l'ID
        echo'<h1>Inscription terminée</h1>';
        echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['mail'])).' vous êtes maintenant inscrit</p>';
        
        //Et on définit les variables de sessions
        // $_SESSION['mail'] = $nouvelUtilisateur->getmail();   // mettre ses lignes en com pour eviter que le nouvel utilisateur soit connecté directement
        // $_SESSION['id'] = $nouvelUtilisateur->getIdCustomers() ;
        // $_SESSION['level'] = $nouvelUtilisateur->getRole();
        header("refresh:3,url=index.php?action=Accueil");
    }
    else // on affiche les erreurs
    {
        echo'<h1>Inscription interrompue</h1>';
        echo'<p>Une ou plusieurs erreurs se sont produites/p>';
        echo'<p>'.$i.' erreur(s)</p>';
        echo'<p>'.$mail_erreur1.'</p>';
        echo'<p>'.$mail_erreur2.'</p>';
        echo'<p>'.$mdp_erreur.'</p>';
        header("refresh:3,url=index.php?action=UserForm");
    }
}
?>