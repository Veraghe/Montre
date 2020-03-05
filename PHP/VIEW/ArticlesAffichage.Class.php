<?php 
class ArticlesAffichage
{
public static function AffichageListeArticles()
{
$tab= ArticlesManager::getList();
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">NameArticle</div>
<div class="bloc titre">DescriptionArticle</div>
<div class="bloc titre">PriceArticle</div>
<div class="bloc titre">AmountAvailabeArticle</div>
<div class="bloc titre">PhotoArticle</div>
</div>
<?php
foreach ($tab as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getNameArticle() ?></div>
<div class="bloc contenu"><?php echo $elt->getDescriptionArticle() ?></div>
<div class="bloc contenu"><?php echo $elt->getPriceArticle() ?></div>
<div class="bloc contenu"><?php echo $elt->getAmountAvailabeArticle() ?></div>
<div class="bloc contenu"><?php echo $elt->getPhotoArticle() ?></div>
</div>
<?php
}
?>
</div>
<?php
}

public static function AffichageDetailArticles($id)
{
$obj = ArticlesManager::findById($id);
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">NameArticle</div>
<div class="bloc titre">DescriptionArticle</div>
<div class="bloc titre">PriceArticle</div>
<div class="bloc titre">AmountAvailabeArticle</div>
<div class="bloc titre">PhotoArticle</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "nameArticle : " . $obj->getNameArticle() ?></div>
<div class="bloc contenu"><?php echo "descriptionArticle : " . $obj->getDescriptionArticle() ?></div>
<div class="bloc contenu"><?php echo "priceArticle : " . $obj->getPriceArticle() ?></div>
<div class="bloc contenu"><?php echo "amountAvailabeArticle : " . $obj->getAmountAvailabeArticle() ?></div>
<div class="bloc contenu"><?php echo "photoArticle : " . $obj->getPhotoArticle() ?></div>
</div>
</div>
<?php
}

}