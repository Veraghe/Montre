<?php
class BasketsManager
{
public static function add(Baskets $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO baskets(idBasket, idArticle, idCustomer, quantity) VALUES (:idBasket, :idArticle, :idCustomer, :quantity)");
$q->bindValue(":idBasket", $obj->getIdBasket());
$q->bindValue(":idArticle", $obj->getIdArticle());
$q->bindValue(":idCustomer", $obj->getIdCustomer());
$q->bindValue(":quantity", $obj->getQuantity());
$q->execute();
}

public static function update(Baskets $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE baskets SET idArticle=:idArticle,idCustomer=:idCustomer, quantity=:quantity, WHERE idBasket=:idBasket");
$q->bindValue(":idBasket", $obj->getIdBasket());
$q->bindValue(":idArticle", $obj->getIdArticle());
$q->bindValue(":idCustomer", $obj->getIdCustomer());
$q->bindValue(":quantity", $obj->getQuantity());
 $q->execute();
}

public static function delete(Baskets $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM baskets WHERE idBasket=" . $obj->getIdBasket());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM baskets WHERE idBasket=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Baskets ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$tab = [];
$q = $db->query("SELECT * FROM baskets");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$tab[] = new Baskets($donnees);
}
}
return $tab;
 }

public static function findByIdCustomer()
}