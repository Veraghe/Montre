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
    case "cherche":
        var_dump($_POST['idArticle']);
        $art=ArticlesManager::findById($_POST['idArticle']);
        // var_dump( $art);
        break;  
}

if ($lvl==1)
{
    header("location:index.php?action=ArticlesListAdmin");
}
else {
    header("location:index.php?action=Articles&id=".$_POST['idArticle']);
}

