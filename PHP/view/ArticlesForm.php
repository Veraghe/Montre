<?php
$mode = $_GET['m'];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $article = ArticlesManager::findById($id);
}
echo'<section>       <!--ArticleForm.php -->
        <div class="center">
            <div class="formulaire">
            <form action="index.php?action=ArticlesAction&m=' . $mode . '" method = POST>
            
            <div> 
                <label for="nameArticle">Dénomination de l\'article : </label>
                <input type="text" id="nameArticle" name="nameArticle" placeholder="Nom"  required autofocus';
                if ($mode != "ajout")
                {
                    echo 'value ="' . $article->getNameArticle() . '"';
                }
echo '>
            </div>';
            if ($mode != "ajout")
            {
                echo ' <div> <input type="text" id="idArticle" name="idArticle" hidden value = "' . $article->getidArticle() . '"> </div>';
            }

            echo'<div> 
                <label for="descriptionArticle">Description de l\'article : </label>
                <input type="text" id="descriptionArticle" name="descriptionArticle" placeholder="Description"  required ';
                if ($mode != "ajout")
                {
                    echo 'value ="' . $article->getDescriptionArticle() . '"';
                }
echo '>
            </div>
            <div> 
                <label for="priceArticle">Prix : </label>
                <input type="text" id="priceArticle" name="priceArticle" placeholder="Prix"  required ';
                if ($mode != "ajout")
                {
                    echo 'value ="' . $article->getPriceArticle() . '"';
                }
echo '>
            </div>
            <div> 
                <label for="photoArticle">Photo : </label>
                <input type="blob" id="photoArticle" name="photoArticle" placeholder="Photo"  required ';
                if ($mode != "ajout")
                {
                    echo 'value ="' . $article->getPhotoArticle() . '"';
                }
echo '>
            </div>
       
        <div class="btn">
            <button class="bouton" id="submit" type="submit ">';
            switch ($mode)
            {
                case "ajout":echo 'Ajouter';
                    break;
                case "modif":echo 'Modifier';
                    break;
                case "suppr":echo 'Supprimer';
                    break;
            }
    echo '  </button>
            <a class="btn" href="index.php?action=ArticleList"> Retour</a>
        </div> </form>
        </div></div>
        </section>';