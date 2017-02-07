<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 22.01.2017
 * Time: 14:11
 */


function addNewArticle($titleArt, $textArt){

    $sql = "INSERT INTO articles (`articles_title`, `articles_text`, `articles_date`) VALUES ('{$titleArt}', '{$textArt}' , NOW())";

    $rs = mysql_query($sql);

    if ($rs) {
        $res['success'] = true;
    } else {
        $res['success'] = false;
    }
    return $res;
}

function getInfoArt($artId){

    $sql = "SELECT * FROM articles WHERE articles_id = '{$artId}' LIMIT 1";

    $rs = mysql_query($sql);

    if ($rs){
        $rs = toArray($rs);
    }
return $rs;
}

function removeArtFromDB($artId){

    $sql = "DELETE FROM articles WHERE articles_id = '{$artId}'";

    $rs = mysql_query($sql);
//
//    if ($rs){
//        $res['success'] = true;
//        $res['message'] = 'Статья удалена';
//    } else {
//        $res['success'] = false;
//        $res['message'] = '';
//    }

    return $rs;
}
