<?php
$mode = $_GET["m"];
$w = new Admins($_POST);
switch ($mode)
{
    case "ajout":
        if ($lvl==1)
        {
            AdminsManager::add($w);
        }
        break;
    case "modif":
        if ($lvl==1)
        {
            AdminsManager::update($w);
        }
        break;
    case "suppr":
        if ($lvl==1)
        {
            AdminsManager::delete($w);
        }
        break;
}
header("location:index.php?action=AdminsList");
