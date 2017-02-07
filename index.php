<?php
session_start();
//$_SESSION['ses']='189';

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
}

include_once 'config/config.php';
include_once 'config/db.php';
include_once 'library/mainFunction.php';


//Определяем контроллер
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']): 'Index';
//echo "-----" . $controllerName . "<br>";
//Определяем функуию
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']): 'Index';
//echo "++++++" . $actionName . "<br>";



if (isset($_SESSION['user'])){
    $smarty->assign('arUser', $_SESSION['user']);
}

$smarty->assign('cartCntItems', count($_SESSION['cart']));


loadPage($smarty, $controllerName, $actionName);