<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 09.01.2017
 * Time: 15:44
 */

function toArray($rs){
    $smartyRs = array();
    if (! $rs){
        return false;
    } else {

        while ($row = mysql_fetch_assoc($rs)) {
            $smartyRs[] = $row;
        }
        return $smartyRs;
    }
}


function loadPage($smarty, $controllerName, $actionName="index"){
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}


function redirect($url){
    if (! $url){$url = '/';}
    header("Location: {$url}");
    exit();
}