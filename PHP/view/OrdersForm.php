<?php
$mode = $_GET['m'];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $order = OrdersManager::findById($id);
    
}
echo'<section>       
        <div class="center">
            <div class="formulaire">
            <form action="index.php?action=OrdersAction&m=' . $mode . '" method = POST>
                
                <div> 
                    <label for="amountOrder">Quantité commande: </label>
                    <input type="number" id="amountOrder" name="amountOrder" required autofocus';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $order->getAmountOrder() . '"';
                    }
    echo '>
                </div>';
                if ($mode != "ajout")
                {
                    echo ' <div> <input type="text" id="idOrder" name="idOrder" hidden value = "' . $order->getIdOrder() . '"> </div>';
                }

                echo'<div> 
                    <label for="dateOrder">Date de la commande: </label>
                    <input type="date" id="dateOrder" name="dateOrder" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $order->getDateOrder() . '"';
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
            <a class="btn" href="index.php?action=OrdersList"> Retour</a>
        </div> </form>
        </div></div>
        </section>';