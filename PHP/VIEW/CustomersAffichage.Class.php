<?php 
class CustomersAffichage
{
public static function AffichageListeCustomers()
{
$tab= CustomersManager::getList();
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">MailCustomer</div>
<div class="bloc titre">PasswordCustomer</div>
<div class="bloc titre">NameCustomer</div>
<div class="bloc titre">SurnameCustomer</div>
<div class="bloc titre">DobCustomer</div>
<div class="bloc titre">AdresseCustomer</div>
<div class="bloc titre">CityCustomer</div>
<div class="bloc titre">PostalCodeCustomer</div>
</div>
<?php
foreach ($tab as $elt) {
?>
<div class="ligne">
<div class="bloc contenu"><?php echo $elt->getMailCustomer() ?></div>
<div class="bloc contenu"><?php echo $elt->getPasswordCustomer() ?></div>
<div class="bloc contenu"><?php echo $elt->getNameCustomer() ?></div>
<div class="bloc contenu"><?php echo $elt->getSurnameCustomer() ?></div>
<div class="bloc contenu"><?php echo $elt->getDobCustomer() ?></div>
<div class="bloc contenu"><?php echo $elt->getAdresseCustomer() ?></div>
<div class="bloc contenu"><?php echo $elt->getCityCustomer() ?></div>
<div class="bloc contenu"><?php echo $elt->getPostalCodeCustomer() ?></div>
</div>
<?php
}
?>
</div>
<?php
}

public static function AffichageDetailCustomers($id)
{
$obj = CustomersManager::findById($id);
?>
<div class="tableau">
<div class="ligne">
<div class="bloc titre">MailCustomer</div>
<div class="bloc titre">PasswordCustomer</div>
<div class="bloc titre">NameCustomer</div>
<div class="bloc titre">SurnameCustomer</div>
<div class="bloc titre">DobCustomer</div>
<div class="bloc titre">AdresseCustomer</div>
<div class="bloc titre">CityCustomer</div>
<div class="bloc titre">PostalCodeCustomer</div>
</div>

<div class="ligne">
<div class="bloc contenu"><?php echo "mailCustomer : " . $obj->getMailCustomer() ?></div>
<div class="bloc contenu"><?php echo "passwordCustomer : " . $obj->getPasswordCustomer() ?></div>
<div class="bloc contenu"><?php echo "nameCustomer : " . $obj->getNameCustomer() ?></div>
<div class="bloc contenu"><?php echo "surnameCustomer : " . $obj->getSurnameCustomer() ?></div>
<div class="bloc contenu"><?php echo "dobCustomer : " . $obj->getDobCustomer() ?></div>
<div class="bloc contenu"><?php echo "adresseCustomer : " . $obj->getAdresseCustomer() ?></div>
<div class="bloc contenu"><?php echo "cityCustomer : " . $obj->getCityCustomer() ?></div>
<div class="bloc contenu"><?php echo "postalCodeCustomer : " . $obj->getPostalCodeCustomer() ?></div>
</div>
</div>
<?php
}

}