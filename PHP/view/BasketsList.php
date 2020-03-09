<?php
$basket = BasketsManager::getList();
$article = ArticleManager::getList();

echo' <section>   
    <div class="ligne">
    <div class="bloc titre">Articles</div>
    <div class="bloc titre">Noms des articles</div>
    <div class="bloc titre taille">Modifier</div>
    <div class="bloc titre taille">Supprimer </div>
    </div>';
    foreach ($article as $elt){ 
        echo'<div class="ligne">
            <div class="bloc contenu">'.$elt->getPhotoArticle().'</div>
            <div class="bloc contenu">'.$elt->getNameArticle().'</div>
            <div class="bloc contenu taille"><a class="bouton" href="index.php?action=BasketsForm&m=modif&id='. $elt->getIdArticle(). '"><i class="fas fa-edit"></i></a></div>
            <div class="bloc contenu taille"><a class="bouton" href="index.php?action=BasketsForm&m=suppr&id='. $elt->getIdArticle(). '"><i class="fas fa-trash"></i></a></div>
        </div>';
    } 
    echo'<div class="doublebtn">
        <a class="btn" href="index?action=BasketsForm">Valider le panier</a>
        <a class="btn" href="index.php?action=adminProfile"> Retour</a>
    </div>
</section>';