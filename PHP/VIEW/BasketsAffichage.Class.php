<?php 
class BasketsAffichage
{
public static function AffichageListeBaskets()
{
$tab= BasketsManager::getList();
?>
<div class="tableau">
<div class="ligne">
</div>
<?php
foreach ($tab as $elt) {
?>
<div class="ligne">
</div>
<?php
}
?>
</div>
<?php
}

public static function AffichageDetailBaskets($id)
{
$obj = BasketsManager::findById($id);
?>
<div class="tableau">
<div class="ligne">
</div>

<div class="ligne">
</div>
</div>
<?php
}

}