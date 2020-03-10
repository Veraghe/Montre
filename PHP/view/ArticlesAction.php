<?php
$mode = $_GET["m"];
$a = new Articles($_POST);
switch ($mode)
{
    case "ajout":
       
        
            ArticlesManager::add($a);
        
        break;
    case "modif":
        
        
            ArticlesManager::update($a);
        
        break;
    case "suppr":
        
        
            ArticlesManager::delete($a);
        
        break;
}
header("location:index.php?action=ArticlesListAdmin");
