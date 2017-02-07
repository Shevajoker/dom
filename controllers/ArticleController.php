<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 22.01.2017
 * Time: 14:06
 */

include_once '/models/IndexModel.php';
include_once '/models/UserModel.php';
include_once '/models/ArticleModel.php';

function indexAction($smarty){
//if (! isset($_SESSION['user'])){
//    redirect('/');
//}

$artId = $_REQUEST['artId'] ? $_REQUEST['artId'] : null;


$infoArt = getInfoArt($artId);

$smarty->assign('title', 'Article Page');
$smarty->assign('infoArt', $infoArt);

loadTemplate($smarty, 'header');
loadTemplate($smarty, 'article');
loadTemplate($smarty, 'footer');

}

function addNewAction(){
    $titleArt = $_REQUEST['name_art'] ? $_REQUEST['name_art'] : null;
    $titleArt = trim($titleArt);

    $textArt = $_REQUEST['text_art'] ? $_REQUEST['text_art'] : null;

    $resData = null;

    $artData = addNewArticle($titleArt, $textArt);

    if ($artData['success']){
    $resData['success'] = true;
    $resData['message'] = 'Статья добавлена.';
    } else {
        $resData['success'] = false;
        $resData['message'] = 'Ошибка записи статьи.';
    }


//    if (! isset($_SESSION['user'])){
//        redirect('/?controller=user');
//    }

//    $resData['1'] = $titleArt;
//    $resData['2'] = $textArt;
    echo json_encode($resData);
}

function removeArticleAction(){

    $artId = $_REQUEST['id'] ? $_REQUEST['id'] : null;

    $rs =null;
    $artRemRs = removeArtFromDB($artId);

    if ($artRemRs){
        $rs['success'] = true;
        $rs['message'] = 'Статья удалена';
    } else {
        $rs['success'] = false;
        $rs['message'] = 'Статья не удалена!';
    }

    echo json_encode($rs);
}