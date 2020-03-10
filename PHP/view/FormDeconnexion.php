<?php

session_destroy();
echo '<b>Vous êtes à présent déconnecté. <br /></b>';
header("refresh:3,url=index.php?action=FormConnexion");
?>