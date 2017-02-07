<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 09.01.2017
 * Time: 15:51
 */

//include_once 'models/IndexModel.php';
include_once '/models/UserModel.php';
include_once '/models/AdsModel.php';
include_once '/models/UserModel.php';


function indexAction($smarty){

    $allArt = getAllArt();

    $ads = getAds(5);


    $smarty->assign('title', 'Index Page');
    $smarty->assign('allArt', $allArt);
    $smarty->assign('ads', $ads);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'leftcolumn');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'rightcolumn');
    loadTemplate($smarty, 'footer');
}

function infoAction($smarty){
    $smarty->assign('title', 'Info Page');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'info');
    loadTemplate($smarty, 'footer');
}

function feedbackAction($smarty){

    $smarty->assign('title', 'Feedback Page');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'feedback');
    loadTemplate($smarty, 'footer');
}

function mapAction($smarty){

    $smarty->assign('title', 'Map Page');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'map');
    loadTemplate($smarty, 'footer');
}

function usersAction($smarty){

    $smarty->assign('title', 'Users Page');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'users');
    loadTemplate($smarty, 'footer');

}


