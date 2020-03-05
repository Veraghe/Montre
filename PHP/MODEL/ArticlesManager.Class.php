<?php
class ArticlesManager
{
public static function add(Articles $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO articles (nameArticle,descriptionArticle,priceArticle,amountAvailabeArticle,photoArticle) VALUES (:nameArticle,:descriptionArticle,:priceArticle,:amountAvailabeArticle,:photoArticle)");
$q->bindValue(":nameArticle", $obj->getNameArticle());
$q->bindValue(":descriptionArticle", $obj->getDescriptionArticle());
$q->bindValue(":priceArticle", $obj->getPriceArticle());
$q->bindValue(":amountAvailabeArticle", $obj->getAmountAvailabeArticle());
$q->bindValue(":photoArticle", $obj->getPhotoArticle());
 $q->execute();
}

public static function update(Articles $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE articles SET nameArticle=:nameArticle, descriptionArticle=:descriptionArticle, priceArticle=:priceArticle, amountAvailabeArticle=:amountAvailabeArticle, photoArticle=:photoArticle WHERE idArticle=:idArticle");
$q->bindValue(":nameArticle", $obj->getNameArticle());
$q->bindValue(":descriptionArticle", $obj->getDescriptionArticle());
$q->bindValue(":priceArticle", $obj->getPriceArticle());
$q->bindValue(":amountAvailabeArticle", $obj->getAmountAvailabeArticle());
$q->bindValue(":photoArticle", $obj->getPhotoArticle());
$q->bindValue("idArticle", $obj->getIdArticle());
 $q->execute();
}

public static function delete(Articles $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM articles WHERE idArticle=" . $obj->getIdArticle());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM articles WHERE idArticle=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Articles ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$tab = [];
$q = $db->query("SELECT * FROM articles");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$tab[] = new Articles($donnees);
}
}
return $tab;
 }

}