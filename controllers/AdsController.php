<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 02.02.2017
 * Time: 14:45
 */

include_once '/models/IndexModel.php';
include_once '/models/UserModel.php';
include_once '/models/ArticleModel.php';
include_once '/models/AdsModel.php';


function indexAction($smarty){
    $smarty->assign('title', 'Ads Page');

    $all_ads = getAllAds();
    $smarty->assign('ads', $all_ads);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'ads');
    loadTemplate($smarty, 'footer');
}


