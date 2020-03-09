<?php
$article= ArticlesManager::getList();
echo'<section>       <!--Article.php -->
        <div class="center">
            <div bloc="contenu">
                <div class="img"><img src="'.$article->getPhotoArticle().'" alt="photo montre"></div>
                <div class="description">
                    <div class="descriptif">'.$article->getDescriptionArticle().'</div>
                    <a div class="btn" href="action=ArticleForm&m=modif">Modifier</a>
                    <a div class="btn" href="action=ArticleForm&m=suppr">Supprimer</a></div>
                <a class="btn" href="index?action=BasketListe&m=ajout">Ajouter au panier</a>
                <a class="btn" href="index.php?action=ArticleList"> Retour</a>
            </div>
        </div>
    </section>';