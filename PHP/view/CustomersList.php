<?php
$customer=CustomersManager::getList();
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
                <div class="bloc titre2 ">Supprimer </div>
            </div>';
foreach ($customer as $elt){

            echo'<div class="ligne">
                <div class="bloc contenu">'.$elt->getMail().'</div>
                <div class="bloc contenu">'.$elt->getNameCustomer().'</div>
                <div class="bloc contenu">'.$elt->getSurnameCustomer().'</div>
                <div class="bloc contenu">'.$elt->getDobCustomer().'</div>
                <div class="bloc contenu">'.$elt->getAdresseCustomer().'</div>
                <div class="bloc contenu">'.$elt->getCityCustomer().'</div>
                <div class="bloc contenu">'.$elt->getPostalCodeCustomer().'</div>
                <div class="bloc contenu "><a class="bouton" href="index.php?action=UserForm&m=modif&id='. $elt->getIdCustomer(). '"><i class="fas fa-edit"></i></a></div>
                <div class="bloc contenu "><a class="bouton" href="index.php?action=UserForm&m=suppr&id='. $elt->getIdCustomer(). '"><i class="fas fa-trash"></i></a></div>
            </div>';
        }
            echo'<div class="doublebtn">
                <a class="btn" href="index.php?action=UserForm&m=ajout">Ajouter
                </a>
                <a class="btn" href="index.php?action=AdminsProfile">
                 Retour
                </a></div>
        </section>';