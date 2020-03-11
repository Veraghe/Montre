<?php
$id = $_SESSION['idCustomer'];

$sousTotal = 0;
// $basket = BasketsManager::getList();

// $id = (isset($_SESSION['idArticle'])) ? $_SESSION['idArticle'] : '';
// $article = ArticlesManager::findById($id);
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
    
     
        foreach ($baskets as $elt ) {

            $article = ArticlesManager::findById($elt->getIdArticle());
            $sousTotal += $elt->getQuantity() * $article->getPriceArticle();
            
            
 echo'<div class="ligne">
            <div class="bloc contenu "><img src="'.$article->getPhotoArticle().'"></div>
            <div class="bloc contenu">'.$article->getNameArticle().'</div>
            <div class="bloc contenu">'.$article->getPriceArticle().'</div>
            <div class="bloc contenu">1</div>
            <div class="bloc contenu ">
               <form action="index.php?action=BasketsAction&m=modif" method="POST">
                    <input type="hidden" name="idBasket" value="' .$elt->getIdBasket().'">
                    <input type="hidden" name="idArticle" value="'. $elt->getIdArticle().'">
                    <input type="hidden" name="idCustomer" value="'. $_SESSION['idCustomer'].'">
                    <input type="hidden" name="quantity" value="'.$elt->getQuantity().'">
                    <input type="hidden" name="articleBasket" value="">
                    <button class="bouton" type="submit" value ="modif"><i class="fas fa-edit"></i></button>
                </form>
            </div> 
            <div class="bloc contenu ">
                <form action="index.php?action=BasketsAction&m=suppr" method="POST">
                    <input type="hidden" name="idBasket" value="' .$elt->getIdBasket().'">
                    <input type="hidden" name="idArticle" value="'. $elt->getIdArticle().'">
                    <input type="hidden" name="idCustomer" value="'. $_SESSION['idCustomer'].'">
                    <input type="hidden" name="quantity" value="'.$elt->getQuantity().'">
                    <input type="hidden" name="articleBasket" value="">
                    <button class="bouton" type="submit" value ="suppr"><i class="fas fa-trash"></i></button>
                </form>
            </div> 
        </div> 
   ';}
    
     
    echo'<p>Total panier :'.$sousTotal.'</p>
    <div class="doublebtn">
        <a class="btn" href="index?action=BasketsForm">Valider le panier</a>
        <a class="btn" href="index.php?action=Articles">Retour</a>
    </div>
</section>';