<?php
//Константы для контроллера
define('PathPrefix', 'controllers/');
define('PathPostfix', 'Controller.php');

//Используемый шаблон
$template = 'default';

//Пути к файлам шаблоннов
define('TemplatePrefix', "views/{$template}/");
define('TemplatePostfix', '.tpl');


//Пути к файлам шаблонов в www
define('TemplateWebPath', "templates/{$template}/");


//Инициализация шаблона
require('library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('tmp/smarty/templates_c');
$smarty->setCacheDir('tmp/smarty/cache');
$smarty->setConfigDir('library/Smarty/configs');

$smarty->assign('teplateWebPath', TemplateWebPath);