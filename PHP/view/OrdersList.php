<?php 
$order = OrdersManager::getList();

echo'<section>       <!--OrdersList.php -->
            <div class="ligne">
                <div class="bloc titre">Montant</div>
                <div class="bloc titre">Date</div>
                <div class="bloc titre taille">Modifier</div>
                <div class="bloc titre taille">Supprimer </div>
            </div>';
foreach ($order as $elt){ 
            echo'<div class="ligne">
                <div class="bloc contenu">'.$elt->getAmountOrder().'</div>
                <div class="bloc contenu">'.$elt->getDateOrder().'</div>
                <div class="bloc contenu taille"><i class="fas fa-edit"></i></div>
                <div class="bloc contenu taille"><i class="fas fa-trash"></i></div>
            </div>';
        }
            echo'<div class="doublebtn">
                <a class="btn" href="index.php?action=adminProfile">
                 Retour
                </a></div>
        </section>';