<?php

$mode = $_GET["m"];
$c = new Customers($_POST);
switch ($mode)
{
    case "ajout":

            CustomersManager::add($c);

        break;
    case "modif":

            CustomersManager::update($c);

        break;
    case "suppr":

            CustomersManager::delete($c);

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
