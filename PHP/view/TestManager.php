<?php
function ChargerClasse($classe)
{
    if (file_exists("../Model/" . $classe . ".Class.php"))
    {
        require "../Model/" . $classe . ".Class.php";
    }
    else
    {
        require "../Controller/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");
DbConnect::init();

$c1 = CustomersManager::findById(1);
echo $c1->getSurnameCustomer();
$c1->setNameCustomer("ROBERT");
CustomersManager::update($c1);