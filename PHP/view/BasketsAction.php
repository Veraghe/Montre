<?php
$mode = $_GET["m"];
$a = new Baskets($_POST);
switch ($mode)
{
    case "ajout":

            BasketsManager::add($a);

        break;
    case "modif":

            BasketsManager::update($a);
 
        break;
    case "suppr":

            BasketsManager::delete($a);

        break;
}
header("location:index.php?action=BasketsList");