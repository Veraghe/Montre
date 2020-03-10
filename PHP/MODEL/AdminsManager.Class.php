<?php
class AdminsManager
{
public static function add(Admins $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO admins (mail,Password) VALUES (:mail,:Password)");
$q->bindValue(":mail", $obj->getMail());
$q->bindValue(":Password", $obj->getPassword());
 $q->execute();
}

public static function update(Admins $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE admins SET mail=:mail, Password=:Password WHERE idAdmin=:idAdmin");
$q->bindValue(":mail", $obj->getMail());
$q->bindValue(":Password", $obj->getPassword());
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

 static public function get($mail) 
 {
     $db = DbConnect::getDb (); // Instance de PDO.
     // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
     $q = $db->prepare ( 'SELECT IdAdmin, mail, Password FROM Admins WHERE mail = :mail' );
     
     // Assignation des valeurs .
     $q->bindValue ( ':mail', $mail );
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