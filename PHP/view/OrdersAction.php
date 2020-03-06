<?php
$mode = $_GET["m"];
$a = new Orders($_POST);
switch ($mode)
{
    case "ajout":
        if ($lvl==1)
        {
            OrdersManager::add($a);
        }
        break;
    case "modif":
        if ($lvl==1)
        {
            OrdersManager::update($a);
        }
        break;
    case "suppr":
        if ($lvl==1)
        {
            OrdersManager::delete($a);
        }
        break;
}
header("location:index.php?action=OrdersList");
