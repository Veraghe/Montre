<?php
$basket = BasketsManager::getList();
$article = ArticlesManager::getList();
$priceBasket = Articles::getPriceArticle();

echo' <section>   
    <div class="ligne">
    <div class="bloc titre">Nom de l\'article</div>
    <div class="bloc titre">Prix</div>
    <div class="bloc titre">Prix du panier</div>
    <div class="bloc titre taille">Modifier</div>
    <div class="bloc titre taille">Supprimer</div>
    </div>';
    foreach ($article as $elt){ 
        echo'<div class="ligne">
            <div class="bloc contenu">'.$elt->getNameArticle().'</div>
            <div class="bloc contenu">'.$elt->getPriceArticle().'</div>
            <div class="bloc contenu">'.$priceBasket+$priceBasket.'</div>
            <div class="bloc contenu taille"><a class="bouton" href="index.php?action=BasketsForm&m=modif&id='. $elt->getIdArticle(). '"><i class="fas fa-edit"></i></a></div>
            <div class="bloc contenu taille"><a class="bouton" href="index.php?action=BasketsForm&m=suppr&id='. $elt->getIdArticle(). '"><i class="fas fa-trash"></i></a></div>
        </div>';
    } 
    echo'<div class="doublebtn">
        <a class="btn" href="index?action=BasketsForm">Valider le panier</a>
        <a class="btn" href="index.php?action=adminProfile">Retour</a>
    </div>
</section>';