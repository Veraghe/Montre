<?php
$id = $_SESSION['idCustomer'];
$sousTotal = 0;
// $basket = BasketsManager::getList();
$articles = ArticlesManager::getList();
// $id = (isset($_SESSION['idArticle'])) ? $_SESSION['idArticle'] : '';
// $article = ArticlesManager::findById($id);
$baskets = BasketsManager::getList($id);


echo' <section>   
    <div class="ligne"> 
    <div class="bloc titre2">Photo</div>
    <div class="bloc titre2">Nom de l\'article</div>
    <div class="bloc titre2">Prix</div>
    <div class="bloc titre2">Quantité</div>
    <div class="bloc titre2">Modifier</div>
    <div class="bloc titre2">Supprimer</div>
    </div>';
    
     
        foreach($baskets as $elt){
            $baskets = BasketsManager::findById($elt->getIdArticle());
            echo'<div class="ligne">
            <div class="bloc contenu"><img src="'.$elt->getBasketArticle()->getPhotoArticle().'"></div>
            <div class="bloc contenu">'.$elt->getBasketArticle()->getPhotoArticle().'</div>
            <div class="bloc contenu">'.$elt->getPriceArticle().'</div>
            <div class="bloc contenu "><a class="bouton" href="index.php?action=BasketsForm&m=modif&id='. $elt->getIdArticle(). '"><i class="fas fa-edit"></i></a></div>
            <div class="bloc contenu "><a class="bouton" href="index.php?action=BasketsForm&m=suppr&id='. $elt->getIdArticle(). '"><i class="fas fa-trash"></i></a></div>
        </div>';}
    } 
     
    echo'<p>Total panier :</p>
    <div class="doublebtn">
        <a class="btn" href="index?action=BasketsForm">Valider le panier</a>
        <a class="btn" href="index.php?action=adminProfile">Retour</a>
    </div>
</section>';