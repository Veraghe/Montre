<?php
class CustomersManager
{
public static function add(Customers $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO customers (Mail,Password,nameCustomer,surnameCustomer,dobCustomer,adresseCustomer,cityCustomer,postalCodeCustomer) VALUES (:Mail,:Password,:nameCustomer,:surnameCustomer,:dobCustomer,:adresseCustomer,:cityCustomer,:postalCodeCustomer)");
$q->bindValue(":Mail", $obj->getMail());
$q->bindValue(":Password", $obj->getPassword());
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
$q = $db->prepare("UPDATE customers SET Mail=:Mail, nameCustomer=:nameCustomer, surnameCustomer=:surnameCustomer, dobCustomer=:dobCustomer, adresseCustomer=:adresseCustomer, cityCustomer=:cityCustomer, postalCodeCustomer=:postalCodeCustomer WHERE idCustomer=:idCustomer");
$q->bindValue(":Mail", $obj->getMail());
$q->bindValue(":nameCustomer", $obj->getNameCustomer());
$q->bindValue(":surnameCustomer", $obj->getSurnameCustomer());
$q->bindValue(":dobCustomer", $obj->getDobCustomer());
$q->bindValue(":adresseCustomer", $obj->getAdresseCustomer());
$q->bindValue(":cityCustomer", $obj->getCityCustomer());
$q->bindValue(":postalCodeCustomer", $obj->getPostalCodeCustomer());
$q->bindValue("idCustomer", $obj->getIdCustomer());
 $q->execute();
}

public static function updatePassword(Customers $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE customers SET  Password=:Password WHERE idCustomer=:idCustomer");
$q->bindValue(":Password", $obj->getPassword());
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

static public function get($mail) 
{
    $db = DbConnect::getDb (); // Instance de PDO.
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
    $q = $db->prepare ( 'SELECT IdCustomer, Mail, Password, nameCustomer, surnameCustomer, dobCustomer, adresseCustomer, cityCustomer, postalCodeCustomer  FROM customers WHERE Mail = :Mail' );
    
    // Assignation des valeurs .
    $q->bindValue ( ':Mail', $mail );
    $q->execute ();
    $donnees = $q->fetch ( PDO::FETCH_ASSOC );
    $q->CloseCursor ();
    
    if ($donnees == false)// Si l'utilisateur n'existe pas, on renvoi un objet vide
    { 
        return new Customers();
    }
    else 
    {
        return new Customers ( $donnees );
    }
}
}