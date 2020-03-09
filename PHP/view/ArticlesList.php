<?php
$article= ArticlesManager::getList();

echo '<section> <!--ArticleList.php -->
        <div class="center">
            <div class="ligne">
                <div class="bloc contenu">';
                foreach ($article as $elt){
                    echo'<figure>
                        <a href ="index?action="><img src="'.$elt->GetPhotoArticle().'" alt="article 1"></a>
                        <figcaption>'.$elt->getNameArticle()."</br>".$elt->getPriceArticle().'</figcaption>
                    </figure>
                    <a class="btn" href="index?action=FormConnexion">Ajouter au panier</a>';
                }

            echo'</div>
            </div>
        </div>
    </section>';
    