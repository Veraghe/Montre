<?php 
class OrdersAffichage
{
public static function AffichageListeOrders()
{
$tab= OrdersManager::getList();
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">AmountOrder</div>
<div class="bloc titre">DateOrder</div>
</div>
<?php
foreach ($tab as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getAmountOrder() ?></div>
<div class="bloc contenu"><?php echo $elt->getDateOrder() ?></div>
</div>
<?php
}
?>
</div>
<?php
}

public static function AffichageDetailOrders($id)
{
$obj = OrdersManager::findById($id);
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">AmountOrder</div>
<div class="bloc titre">DateOrder</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "amountOrder : " . $obj->getAmountOrder() ?></div>
<div class="bloc contenu"><?php echo "dateOrder : " . $obj->getDateOrder() ?></div>
</div>
</div>
<?php
}

}