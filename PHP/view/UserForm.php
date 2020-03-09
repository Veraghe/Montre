<?php
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $user = CustomersManager::getById($id);
}

echo'<section>       <!--UserForm.php --> <!--ProfileCustomer.php avec les differents champs remplis et un bouton en plus modif mdp-->
        <div class="center">
            <div class="formulaire">
                <form action="index.php?action=UserAction&m=' . $mode . '" method = POST>
                    <div> 
                        <label for="mailCustomer">Mail : </label>
                        <input type="mail" id="mailCustomer" name="mailCustomer" placeholder="Mail"  required autofocus';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getMailCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="passwordCustomer">Mot de passe : </label>
                        <input type="password" id="password" name="passwordCustomer" placeholder="Mot de passe"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getPasswordCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="confirm">Confirmation mot de passe : </label>
                        <input type="password" id="confirm" name="confirm" placeholder="Confirmer le mot de passe"  required >
                    </div>
                    <div> 
                        <label for="nameCustomer">Nom : </label>
                        <input type="text" id="nom" name="nameCustomer" placeholder="Nom"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getNameCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="surnameCustomer">Prenom : </label>
                        <input type="text" id="prenom" name="surnameCustomer" placeholder="Prenom"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getSurnameCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="dobCustomer">Date de naissance : </label>
                        <input type="date" id="dob" name="dobCustomer" placeholder="Date de naissance"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getDobCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="adresseCustomer">Adresse : </label>
                        <input type="text" id="adresse" name="adresseCustomer" placeholder="Adresse"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getAdresseCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="cityCustomer">Ville : </label>
                        <input type="text" id="city" name="cityCustomer" placeholder="Ville"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getCityCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div> 
                        <label for="postalCodeCustomer">Code postal : </label>
                        <input type="text" id="city" name="postalCodeCustomer" placeholder="Code postal"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getPostalCodeCustomer() . '"';
                        }
    echo '         >
                    </div>
                    <div class="btn">
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
                        <a class="btn" href="index.php?action=UserForm"> Retour</a>
                    </div>
                    </div>
                </form>
        </div>
    </section>';
