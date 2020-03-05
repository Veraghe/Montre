<?php
class CustomersManager
{
public static function add(Customers $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO customers (mailCustomer,passwordCustomer,nameCustomer,surnameCustomer,dobCustomer,adresseCustomer,cityCustomer,postalCodeCustomer) VALUES (:mailCustomer,:passwordCustomer,:nameCustomer,:surnameCustomer,:dobCustomer,:adresseCustomer,:cityCustomer,:postalCodeCustomer)");
$q->bindValue(":mailCustomer", $obj->getMailCustomer());
$q->bindValue(":passwordCustomer", $obj->getPasswordCustomer());
$q->bindValue(":nameCustomer", $obj->getNameCustomer());
$q->bindValue(":surnameCustomer", $obj->getSurnameCustomer());
$q->bindValue(":dobCustomer", $obj->getDobCustomer());
$q->bindValue(":adresseCustomer", $obj->getAdresseCustomer());
$q->bindValue(":cityCustomer", $obj->getCityCustomer());
$q->bindValue(":postalCodeCustomer", $obj->getPostalCodeCustomer());
 $q->execute();
}

public static function update(Customers $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE customers SET mailCustomer=:mailCustomer, passwordCustomer=:passwordCustomer, nameCustomer=:nameCustomer, surnameCustomer=:surnameCustomer, dobCustomer=:dobCustomer, adresseCustomer=:adresseCustomer, cityCustomer=:cityCustomer, postalCodeCustomer=:postalCodeCustomer WHERE idCustomer=:idCustomer");
$q->bindValue(":mailCustomer", $obj->getMailCustomer());
$q->bindValue(":passwordCustomer", $obj->getPasswordCustomer());
$q->bindValue(":nameCustomer", $obj->getNameCustomer());
$q->bindValue(":surnameCustomer", $obj->getSurnameCustomer());
$q->bindValue(":dobCustomer", $obj->getDobCustomer());
$q->bindValue(":adresseCustomer", $obj->getAdresseCustomer());
$q->bindValue(":cityCustomer", $obj->getCityCustomer());
$q->bindValue(":postalCodeCustomer", $obj->getPostalCodeCustomer());
$q->bindValue("idCustomer", $obj->getIdCustomer());
 $q->execute();
}

public static function delete(Customers $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM customers WHERE idCustomer=" . $obj->getIdCustomer());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM customers WHERE idCustomer=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Customers ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$tab = [];
$q = $db->query("SELECT * FROM customers");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$tab[] = new Customers($donnees);
}
}
return $tab;
 }

}