<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 02.02.2017
 * Time: 14:45
 */


function getAllAds(){
    $rs = null;

    $sql = "SELECT * FROM ads";

    $rs = mysql_query($sql);

    if ($rs){
        $rs=toArray($rs);
    }
    return $rs;

}

function getAds($number){
    $rs = null;

    $sql = "SELECT * FROM ads LIMIT {$number}";

    $rs = mysql_query($sql);

    if ($rs){
        $rs = toArray($rs);
    }

    return $rs;
}