<?php
/*require_once"control/Controleurproduit.php";
if(isset($_GET['action']))
$action=$_GET['action'];
else
$action='liste';
ControleurProduit::$action();*/

require_once"control/Controleurclient.php";
if(isset($_GET['action']))
$action=$_GET['action'];
else
$action='liste';
ControleurClient::$action(); 

require_once"control/ControleurCommande.php";
if(isset($_GET['action']))
$action=$_GET['action'];
else
$action='liste';
Controleurcommande::$action();
?>