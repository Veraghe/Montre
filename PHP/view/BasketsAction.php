<?php
$mode = $_GET["m"];
$b = new Baskets($_POST);

switch ($mode)
{
    case "ajout":
        $b->setIdCustomer($_SESSION['idCustomer']);
        $b->setIdArticle($_GET['id']);
        $b->setQuantity(1);
            BasketsManager::add($b);
        break;
    case "modif":

            BasketsManager::update($b);
 
        break;
    case "suppr":

            BasketsManager::delete($b);

        break;
    case "suppr2":

        BasketsManager::deleteCustomer($b->getIdCustomer());

    break;}
header("location:index.php?action=BasketsList");