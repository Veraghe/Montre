<?php 
class AdminsAffichage
{
public static function AffichageListeAdmins()
{
$tab= AdminsManager::getList();
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">MailAdmin</div>
<div class="bloc titre">PasswordAdmin</div>
</div>
<?php
foreach ($tab as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getMailAdmin() ?></div>
<div class="bloc contenu"><?php echo $elt->getPasswordAdmin() ?></div>
</div>
<?php
}
?>
</div>
<?php
}

public static function AffichageDetailAdmins($id)
{
$obj = AdminsManager::findById($id);
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">MailAdmin</div>
<div class="bloc titre">PasswordAdmin</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "mailAdmin : " . $obj->getMailAdmin() ?></div>
<div class="bloc contenu"><?php echo "passwordAdmin : " . $obj->getPasswordAdmin() ?></div>
</div>
</div>
<?php
}

}