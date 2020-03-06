<?php
$mode = $_GET["m"];
$a = new Articles($_POST);
switch ($mode)
{
    case "ajout":
        if ($lvl==1)
        {
            ArticlesManager::add($a);
        }
        break;
    case "modif":
        if ($lvl==1)
        {
            ArticlesManager::update($a);
        }
        break;
    case "suppr":
        if ($lvl==1)
        {
            ArticlesManager::delete($a);
        }
        break;
}
header("location:index.php?action=ArticlesList");
