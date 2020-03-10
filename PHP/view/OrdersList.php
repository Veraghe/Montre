<?php 
$article = ArticlesManager::getList();
$order = OrdersManager::getList();
$customer = CustomersManager::getList();

echo'<section class="liste">       <!--OrdersList.php -->
            <div class="ligne">
                <div class="bloc titre2">N° commande</div>
                <div class="bloc titre2">Quantité article</div>
                <div class="bloc titre2">N° article</div>
                <div class="bloc titre2">Nom</div>
                <div class="bloc titre2">Adresse</div>
                <div class="bloc titre2">Ville</div>
                <div class="bloc titre2">CP</div>
            </div>';

foreach ($article as $elt1){
foreach ($order as $elt){ 
            echo'<div class="ligne">
                <div class="bloc contenu">'.$elt->getIdOrder().'</div>
                <div class="bloc contenu">'.$elt->getAmountOrder().'</div>
                <div class="bloc contenu">'.$elt->getIdArticle().'</div>
                <div class="bloc contenu">'.$elt->getNameCustomer().'</div>
                <div class="bloc contenu">'.$elt->getAdresseCustomer().'</div>
                <div class="bloc contenu">'.$elt->getCityCustomer().'</div>
                <div class="bloc contenu">'.$elt->getPostalCodeCustomer().'</div>
                <div class="bloc contenu taille"><a class="bouton" href="index.php?action=OrdersForm&m=modif&id='. $elt->getIdOrder(). '"><i class="fas fa-edit"></i></a></div>
                <div class="bloc contenu taille"><a class="bouton" href="index.php?action=OrdersForm&m=suppr&id='. $elt->getIdOrder(). '"><i class="fas fa-trash"></i></a></div>    
            </div>';
        }
    }
            echo'<div class="doublebtn">
                <a class="btn" href="index.php?action=AdminsProfile">
                 Retour
                </a></div>
        </section>';