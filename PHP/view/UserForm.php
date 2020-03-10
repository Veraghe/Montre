<?php
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $user = CustomersManager::findById($id);
}

echo'<section>       <!--UserForm.php --> <!--ProfileCustomer.php avec les differents champs remplis et un bouton en plus modif mdp-->
        <div class="center">
            <div class="formulaire">
                <form action="index.php?action=CustomersAction&m=' . $mode . '" method = POST>
                    <div> 
                        <label for="mail">Mail : </label>
                        <input type="mail" id="mail" name="mail" placeholder="Mail"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getMail() . '"';
                        }
    echo '         >
                    </div>';
                    if ($mode != "ajout")
                    {
                        echo ' <div> <input type="text" id="idCustomer" name="idCustomer" hidden value = "' . $user->getIdCustomer() . '"> </div>';
                    }
                    echo'<div> 
                        <label for="password">Mot de passe : </label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe"  required ';
                        if ($mode != "ajout")
                        {
                            echo 'value ="' . $user->getPassword() . '"';
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
                        <a class="btn" href="index.php?action=CustomersList"> Retour</a>
                    </div>
                    </div>
                </form>
        </div>
    </section>';
