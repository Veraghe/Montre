<?php

$mode = $_GET["m"];
$c = new Customers($_POST);

switch ($mode)
{
    case "ajout":
            $c->setPassword(md5($c->getPassword()));
            CustomersManager::add($c);

        break;
    case "modif":
            // $copie=CustomersManager::findById($c->getIdCustomer());
            // $c->setPassword($copie->getPassword());
            CustomersManager::update($c);

        break;
    case "suppr":

            CustomersManager::delete($c);

        break;
        case "modifmdp":
            $c->setPassword(md5($c->getPassword()));
            CustomersManager::updatePassword($c);
            
        break;
}

if ($lvl==1)
{
    header("location:index.php?action=CustomersList");
}
else 
{
    header("location:index.php?action=CustomersProfile");
}
