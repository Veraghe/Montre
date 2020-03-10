<?php
$mode = $_GET["m"];
$o = new Orders($_POST);
switch ($mode)
{
    case "ajout":
        if ($lvl==1)
        {
            OrdersManager::add($o);
        }
        break;
    case "modif":
        if ($lvl==1)
        {
            OrdersManager::update($o);
        }
        break;
    case "suppr":
        if ($lvl==1)
        {
            OrdersManager::delete($o);
        }
        break;
}
header("location:index.php?action=OrdersList");
