<?php
class AdminsManager
{
public static function add(Admins $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO admins (mailAdmin,passwordAdmin) VALUES (:mailAdmin,:passwordAdmin)");
$q->bindValue(":mailAdmin", $obj->getMailAdmin());
$q->bindValue(":passwordAdmin", $obj->getPasswordAdmin());
 $q->execute();
}

public static function update(Admins $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE admins SET mailAdmin=:mailAdmin, passwordAdmin=:passwordAdmin WHERE idAdmin=:idAdmin");
$q->bindValue(":mailAdmin", $obj->getMailAdmin());
$q->bindValue(":passwordAdmin", $obj->getPasswordAdmin());
$q->bindValue("idAdmin", $obj->getIdAdmin());
 $q->execute();
}

public static function delete(Admins $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM admins WHERE idAdmin=" . $obj->getIdAdmin());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM admins WHERE idAdmin=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Admins ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$tab = [];
$q = $db->query("SELECT * FROM admins");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$tab[] = new Admins($donnees);
}
}
return $tab;
 }

 static public function get($mailAdmin) 
 {
     $db = DbConnect::getDb (); // Instance de PDO.
     // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
     $q = $db->prepare ( 'SELECT IdAdmin, mailAdmin, passwordAdmin FROM Admins WHERE mailAdmin = :mailAdmin' );
     
     // Assignation des valeurs .
     $q->bindValue ( ':mailAdmin', $mailAdmin );
     $q->execute ();
     $donnees = $q->fetch ( PDO::FETCH_ASSOC );
     $q->CloseCursor ();
     if ($donnees == false)// Si l'utilisateur n'existe pas, on renvoi un objet vide
     { 
         return new Admins();
     }
     else 
     {
         return new Admins ( $donnees );
     }
 }


}