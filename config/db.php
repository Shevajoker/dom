<?php 
// Подключение к БД

$dblocation = 'localhost';
$dbname = 'dom';
$dbuser = 'root';
$dbpassword = '';


$db = mysql_connect($dblocation, $dbuser, $dbpassword);

if (!$db){
    echo 'Ошибка подключения к БД';
    exit();
}

mysql_set_charset('utf8');

if(!mysql_select_db($dbname, $db)){
    echo "Ошибка доступа к базе данных: {$dbname}";
    exit();
}