
<section>
    <div class="titre"><h2>Votre compte</h2></div>

</section>
<?php









echo'<section class="liste">       <!--CustomerList.php -->
            <div class="ligne">
                <div class="bloc titre2">Mail</div>
                <div class="bloc titre2">Nom</div>
                <div class="bloc titre2">Prenom</div>
                <div class="bloc titre2">Date de naissance</div>
                <div class="bloc titre2">Adresse</div>
                <div class="bloc titre2">Ville</div>
                <div class="bloc titre2">Code postal</div>
                <div class="bloc titre2 ">Modifier</div>
                
            </div>';
// foreach ($customers as $customer){
    $id = (isset($_SESSION['idCustomer'])) ? $_SESSION['idCustomer'] : '';
    $mail = (isset($_SESSION['mail'])) ? $_SESSION['mail'] : '';
    $name = (isset($_SESSION['nameCustomer'])) ? $_SESSION['nameCustomer'] : '';
    $surname = (isset($_SESSION['surnameCustomer'])) ? $_SESSION['surnameCustomer'] : '';
    $dob = (isset($_SESSION['dobCustomer'])) ? $_SESSION['dobCustomer'] : '';
    $adress = (isset($_SESSION['adresseCustomer'])) ? $_SESSION['adresseCustomer'] : '';
    $ville = (isset($_SESSION['cityCustomer'])) ? $_SESSION['cityCustomer'] : '';
    $CP = (isset($_SESSION['postalCodeCustomer'])) ? $_SESSION['postalCodeCustomer'] : '';
    $customer=CustomersManager::findById($id);
         
    
        echo'<div class="ligne">
                <div class="bloc contenu">'.$mail.'</div>
                <div class="bloc contenu">'.$name.'</div>
                <div class="bloc contenu">'.$surname.'</div>
                <div class="bloc contenu">'.$dob.'</div>
                <div class="bloc contenu">'.$adress.'</div>
                <div class="bloc contenu">'.$ville.'</div>
                <div class="bloc contenu">'.$CP.'</div>
                <div class="bloc contenu "><a class="bouton" href="index.php?action=UserForm&m=modif&id='. $customer->getIdCustomer(). '"><i class="fas fa-edit"></i></a></div>
                
            </div>';
        // }
            echo'<div class="doublebtn">
                <a class="btn" href="index.php?action=FormDeconnexion">Deconnexion
                </a>
                <a class="btn" href="index.php?action=Accueil">
                 Retour
                </a></div>
        </section>';