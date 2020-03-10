<?php
$article= ArticlesManager::getList();
{
echo'<section class="liste">       <!--ArticleList.php -->
    <div class="ligne">
        <div class="bloc titre2">Photo</div>
        <div class="bloc titre2">Nom</div>
        <div class="bloc titre2 taille">Description</div>
        <div class="bloc titre2">Prix</div>';
        // <div class="bloc titr2">Quantité</div>
        echo '<div class="bloc titre2">Modifier</div>
        <div class="bloc titre2">Supprimer</div>
    </div>';
    foreach ($article as $elt)
    {
       
            echo'<div class="ligne">
                <div class="bloc contenu"><img src="'.$elt->GetPhotoArticle().'" alt="article 1"></div>
                <div class="bloc contenu">'.$elt->getNameArticle().'</div>
                <div class="bloc contenu taille">'.$elt->getDescriptionArticle().'</div>
                <div class="bloc contenu">'.$elt->getPriceArticle().' €</div>';
                // <div class="bloc contenu">'.$elt->getAmountAvailableArticle().'</div>
                echo '<div class="bloc contenu"><a class="bouton" href="index.php?action=ArticlesForm&m=modif&id='. $elt->getIdArticle(). '"><i class="fas fa-edit"></i></a></div>
                <div class="bloc contenu "><a class="bouton" href="index.php?action=ArticlesForm&m=suppr&id='. $elt->getIdArticle(). '"><i class="fas fa-trash"></i></a></div>    
            </div>';
        
    }
    echo'<div class="doublebtn">
    <a class="btn" href="index.php?action=ArticlesForm&m=ajout">
         Ajouter
        </a>
        <a class="btn" href="index.php?action=AdminsProfile">
         Retour
        </a>
    </div>
</section>';
}