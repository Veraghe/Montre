<?php
class OrdersManager
{
public static function add(Orders $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO orders (amountOrder,dateOrder) VALUES (:amountOrder,:dateOrder)");
$q->bindValue(":amountOrder", $obj->getAmountOrder());
$q->bindValue(":dateOrder", $obj->getDateOrder());
 $q->execute();
}

public static function update(Orders $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE orders SET amountOrder=:amountOrder, dateOrder=:dateOrder WHERE idOrder=:idOrder");
$q->bindValue(":amountOrder", $obj->getAmountOrder());
$q->bindValue(":dateOrder", $obj->getDateOrder());
$q->bindValue("idOrder", $obj->getIdOrder());
 $q->execute();
}

public static function delete(Orders $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM orders WHERE idOrder=" . $obj->getIdOrder());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM orders WHERE idOrder=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Orders ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$tab = [];
$q = $db->query("SELECT * FROM orders");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$tab[] = new Orders($donnees);
}
}
return $tab;
 }

}