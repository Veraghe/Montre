<?php
$mode = $_GET['m'];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $basket = BasketsManager::findById($id);
}
echo'<section>       <!--ArticleForm.php -->
        <div class="center">
            <div class="formulaire">
            <form action="index.php?action=BasketsAction&m=' . $mode . '" method = POST>';

            if ($mode != "ajout")
            {
                echo ' <div> <input type="text" id="idBasket" name="idBasket" hidden value = "' . $basket->getidBasket() . '"> </div>';
            }

echo '          >
            </div>';



       
        echo'<div class="btn">
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
            <a class="btn" href="index.php?action=BasketsList"> Retour</a>
        </div> </form>
        </div></div>
        </section>';