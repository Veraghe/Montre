<?php
$customer=CustomersManager::getList();
echo'<section>       <!--CustomerList.php -->
            <div class="ligne">
                <div class="bloc titre">Mail</div>
                <div class="bloc titre">Nom</div>
                <div class="bloc titre">Prenom</div>
                <div class="bloc titre">Date de naissance</div>
                <div class="bloc titre">Adresse</div>
                <div class="bloc titre">Ville</div>
                <div class="bloc titre">Code postal</div>
                <div class="bloc titre taille">Modifier</div>
                <div class="bloc titre taille">Supprimer </div>
            </div>';
foreach ($customer as $elt){

            echo'<div class="ligne">
                <div class="bloc contenu">'.$elt->getMailCustomer().'</div>
                <div class="bloc contenu">'.$elt->getNameCustomer().'</div>
                <div class="bloc contenu">'.$elt->getSurnameCustomer().'</div>
                <div class="bloc contenu">'.$elt->getDobCustomer().'</div>
                <div class="bloc contenu">'.$elt->getAdresseCustomer().'</div>
                <div class="bloc contenu">'.$elt->getCityCustomer().'</div>
                <div class="bloc contenu">'.$elt->getPostalCodeCustomer().' postal</div>
                <div class="bloc contenu taille"><a class="bouton" href="index.php?action=UserForm&m=modif&id='. $elt->getIdCustomer(). '"><i class="fas fa-edit"></i></a></div>
                <div class="bloc contenu taille"><a class="bouton" href="index.php?action=UserForm&m=suppr&id='. $elt->getIdCustomer(). '"><i class="fas fa-trash"></i></a></div>
            </div>';
        }
            echo'<div class="doublebtn">
                <a class="btn" href="index.php?action=UserForm&m=ajout">Ajouter
                </a>
                <a class="btn" href="index.php?action=adminProfile">
                 Retour
                </a></div>
        </section>';