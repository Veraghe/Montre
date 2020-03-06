<?php
$mode = $_GET["m"];
$a = new Admins($_POST);
switch ($mode)
{
    case "ajout":
        if ($lvl==1)
        {
            AdminsManager::add($a);
        }
        break;
    case "modif":
        if ($lvl==1)
        {
            AdminsManager::update($a);
        }
        break;
    case "suppr":
        if ($lvl==1)
        {
            AdminsManager::delete($a);
        }
        break;
}
header("location:index.php?action=AdminsList");
