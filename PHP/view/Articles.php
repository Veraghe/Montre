<?php
$id = $_GET["id"];
$article= ArticlesManager::findById($id);
echo'<section >       <!--Article.php -->
        <div class="center">
            <div bloc="contenu article">
                <div class="articleDescription">
                    <div class="img"><img src="'.$article->getPhotoArticle().'" alt="photo montre"></div>
                    <div class="descriptif"><div class="titre">  '.$article->getNameArticle().'</div></br>'.$article->getDescriptionArticle().'</div>

                </div>
                <div class="btnArticle">
                <a class="btn" href="index?action=BasketsList&m=ajout">Ajouter au panier</a>
                <a class="btn" href="index.php?action=ArticlesList"> Retour</a>
            </div>
            </div>
        </div>
    </section>';
   