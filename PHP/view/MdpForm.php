<?php
// $_POST['password']='';
// var_dump($_POST['password']);
if (!isset($_POST['password']))
{
// $mode = $_GET["m"];
$id = (isset($_SESSION['idCustomer'])) ? $_SESSION['idCustomer'] : '';
    // $id = $_GET["id"];
    $Customers = CustomersManager::findById($id);


echo'<section>       <!--CustomersForm.php --> <!--ProfileCustomer.php avec les differents champs remplis et un bouton en plus modif mdp-->
        <div class="center">
            <div class="formulaire">
                <form action="index.php?action=CustomersAction&m=modifmdp" method = POST>';
                  
                    
                        echo ' <div> <input type="text" id="idCustomer" name="idCustomer" hidden value = "' . $id . '"> </div>';
                    

                    echo'<div> 
                        <label for="password">Mot de passe : </label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe"  required >
                    </div>
                    <div> 
                        <label for="confirm">Confirmation mot de passe : </label>
                        <input type="password" id="confirm" name="confirm" placeholder="Confirmer le mot de passe"  required >
                    </div>

      
                    <div class="bouton">
                        <button class="bouton" id="submit" type="submit ">Valider</button>';

                            echo '<a class="btn" href="index.php?action=CustomersProfile"> Retour</a>
                        </div>
                    </div>
                </form>
        </div>
    </section>';}

    else /// pas fonctionnel lien dans
    {
        $i = 0;
        $mdp_erreur = null;
        $pass = md5($_POST['password']); // on hache le password avec md5
        $confirm = md5($_POST['confirm']);
        if ($pass != $confirm || empty($confirm) || empty($pass))
        {
            $mdp_erreur = "Votre mot de passe et votre confirmation sont différents, ou sont vides";
            $i++;
        }
        if ($i==0) // S'il n'y a pas d'erreur
    {
        echo '<p>Félicitations, votre mot de passe a bien été changé.</p>';
        // <a class="btn" href="index.php?action=CustomersAction&m=modifmdp"> Retour</a>';
        header("refresh:4,url=index.php?action=CustomersProfile");
    }
    else // on affiche les erreurs
    {
        echo'<p>Changement interrompu</p>';
        echo'<p>'.$i.' erreur(s)</p>';
        echo'<p>'.$mdp_erreur.'</p>';
        header("refresh:7,url=index.php?action=MdpForm");
    }
}
    