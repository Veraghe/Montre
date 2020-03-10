<?php

$mail = (isset($_SESSION['mail'])) ? $_SESSION['mail'] : '';

?>

<header>
        <div class="center top">
            <div class="logo">
                <img src="ressources/images/logoWhite.png" alt="logo de l'entreprise">
            </div>
            <div class="nav">
                <nav id="rubrique">
                    <ul>
                        <li><a href="index?action=Accueil">Accueil</a></li>
                        <li><a href="index?action=ArticlesList">Montres</a></li>
                        <li><a href="index?action=Contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="icone">

            <?php if ($mail == '' ) {
    echo '<a href="index?action=FormConnexion" ><i class="fas fa-user"></i></a>';
} else  {
    if ($_SESSION['level'] == 1)
    {
        echo '<a href="index?action=AdminsProfile" ><i class="fas fa-user"></i></a>';
    }
    else {
    echo '<a href="index?action=CustomersProfile" ><i class="fas fa-user"></i></a>';
    }
}
?>
            <a href="index?action=BasketsList" ><i class="fas fa-shopping-basket"></i></a>
            </div>
        </div>
    </header>