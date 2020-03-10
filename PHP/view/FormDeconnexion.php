<?php

session_destroy();
echo '<p>Vous êtes à présent déconnecté. <br /></p>';
header("refresh:3,url=index.php?action=FormConnexion");
?>