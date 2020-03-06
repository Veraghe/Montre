<?php
$mode = $_GET["m"];
$a = new Customers($_POST);
switch ($mode)
{
    case "ajout":

            CustomersManager::add($a);

        break;
    case "modif":

            CustomersManager::update($a);

        break;
    case "suppr":

            CustomersManager::delete($a);

        break;
}
header("location:index.php?action=CustomersList");