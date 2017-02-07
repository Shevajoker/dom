<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 25.01.2017
 * Time: 16:20
 */

include_once '/models/IndexModel.php';
include_once '/models/UserModel.php';
include_once '/models/ArticleModel.php';

function indexAction($smarty) {

    $smarty->assign('title', 'Adminka');

    loadTemplate($smarty, 'headerAdm');
    loadTemplate($smarty, 'indexAdmin');
    loadTemplate($smarty, 'footer');
}

function logInAdminAction(){

    $loginAdmin = $_REQUEST['loginAdmin'] ? $_REQUEST['loginAdmin'] : null;
    $loginAdmin = trim($loginAdmin);

    $pwdAdmin = $_REQUEST['pwdAdmin'] ? $_REQUEST['pwdAdmin'] : null;

    $res = null;

    if ($loginAdmin == 'admin' && $pwdAdmin == 'admin'){
        $res['success'] = true;
        $res['message'] = 'ADMIN вход выполнен!';
        $_SESSION['user'] = 'admin';
    } else {
        $res['success'] = false;
        $res['message'] = 'Неверный логин или пароль!';
    }


//    $res['111'] = $loginAdmin;
//    $res['2222'] = $pwdAdmin;

    echo json_encode($res);

}

function addArtAction($smarty){
    if (! isset($_SESSION['user'])){
        redirect('/?controller=admin');
    }

    $allArt = getAllArt();

    $smarty->assign('title', 'Admin Page');
    $smarty->assign('allArt', $allArt);


    loadTemplate($smarty, 'headerAdm');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'footer');
}

function addAdsAction($smarty){
    if (! isset($_SESSION['user'])){
        redirect('/?controller=admin');
    }

    $smarty->assign('title', 'AddAds');

    loadTemplate($smarty, 'headerAdm');
    loadTemplate($smarty, 'adsAdmin');
    loadTemplate($smarty, 'footer');
}