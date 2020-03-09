<?php
$article= ArticlesManager::getList();
// if ($level==2)
// {
echo '<section> <!--ArticleList.php -->
        <div class="center">
            <div class="ligne">
                ';
                foreach ($article as $elt){
                    echo'<div class="bloc contenu"><figure>
                        <a href ="index?action=Articles&id='.$elt->getIdArticle().'"><img src="'.$elt->GetPhotoArticle().'" alt="article 1"></a>
                        <figcaption>'.$elt->getNameArticle()."</br>".$elt->getPriceArticle().'</figcaption>
                    </figure>
                    <a class="btn" href="index?action=ArticlesList">Ajouter au panier</a></div>';
                }

            echo'
            </div>
        </div>
    </section>';
// }
// else
// {
// echo'<section>       <!--ArticleList.php -->
//     <div class="ligne">
//         <div class="bloc titre">Nom</div>
//         <div class="bloc titre">Description</div>
//         <div class="bloc titre">Prix</div>
//         <div class="bloc titre">Quantité</div>
//         <div class="bloc titre"></div>
//         <div class="bloc titre"></div>
//     </div>';
//     foreach ($article as $elt1)
//     {
//         foreach ($order as $elt)
//         { 
//             echo'<div class="ligne">
//                 <div class="bloc contenu">'.$elt->getNameArticle().'</div>
//                 <div class="bloc contenu">'.$elt->getDescriptionArticle().'</div>
//                 <div class="bloc contenu">'.$elt->getPriceArticle().'</div>
//                 <div class="bloc contenu">'.$elt->getAmountAvailableArticle().'</div>
//                 <div class="bloc contenu taille"><a class="bouton" href="index.php?action=ArticlesForm&m=modif&id='. $elt->getIdArticle(). '"><i class="fas fa-edit"></i></a></div>
//                 <div class="bloc contenu taille"><a class="bouton" href="index.php?action=ArticlesForm&m=suppr&id='. $elt->getIdArticle(). '"><i class="fas fa-trash"></i></a></div>    
//             </div>';
//         }
//     }
//     echo'<div class="doublebtn">
//         <a class="btn" href="index.php?action=adminProfile">
//          Retour
//         </a>
//     </div>
// </section>';
// }
      